<?php
App::uses('AppController','Controller');
class UsersController extends AppController{
    
    public $layout = 'login';
    
    public function login(){
        if (!empty($this->request->data)) {
            if ($this->Auth->login()) {
                if ($this->Auth->User('active') == 1){ 
                    if($this->Auth->User('Role.prefix')=="stock"){
                        $this->redirect($this->Auth->redirect('/stock/composants'));
                    } 
                    else if($this->Auth->User('Role.prefix')=="commercial"){
                        $this->redirect($this->Auth->redirect('/commercial/projects'));
                    } 
                    else if($this->Auth->User('Role.prefix')=="admin"){
                        $this->redirect($this->Auth->redirect('/admin/users'));
                    }
                }else{
                    $this->Session->delete('User');
                    $this->Session->destroy();
                    $this->Session->setFlash("Votre compte a été désactiver, merci de contacter l'dministrateur", 'warning');
                }
            }else{
                $this->Session->setFlash("Identifiants incorrects","flash", array('type' => 'danger'));
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        return $this->redirect('/');
    }

    /**
     * Permet de regénérer un mot de passe pour un utilisateur
     */
    public function forgot(){
        if (!empty($this->request->data)) {
            $user = $this->User->findByMail($this->request->data['User']['mail'], array('id'));
            if(empty($user)){
                $this->Session->setFlash("Cet e-mail n'est associé a aucun compte","flash", array('type' => 'danger'));
            }else{
                $token = md5(uniqid().time());
                $this->User->id = $user['User']['id'];
                $this->User->saveField('token', $token);

                App::uses('CakeEmail', 'Network/Email');
                $cakeMail = new CakeEmail('smtp');
                $cakeMail->to($this->request->data['User']['mail']);
                $cakeMail->subject('Régénération de mot de passe');
                $cakeMail->template('password');
                $cakeMail->viewVars(array('token' => $token, 'id' => $user['User']['id']));
                $cakeMail->emailFormat('text');
                $cakeMail->send();

                $this->Session->setFlash("Un email vous a été envoyé avec les instructions pour regénérer votre mot de passe","flash");
            }
        }
    }

    public function password($user_id, $token){
        $user = $this->User->find('first', array(
            'fields'     => array('id','username'),
            'conditions' => array('id' => $user_id, 'token' => $token)
        ));
        if (empty($user)) {
            $this->Session->setFlash('Ce lien ne semble pas bon','flash',array('type'=>'danger'));
            return $this->redirect(array('action' => 'forgot'));
        }
        if(!empty($this->request->data)){
            $this->User->create($this->request->data);
            if($this->User->validates()){
                $this->User->create();
                $this->User->save(array(
                    'id' => $user['User']['id'],
                    'token' => '',
                    'active' => 1,
                    'password' => $this->Auth->password($this->request->data['User']['password'])
                ));
                $this->Session->setFlash("Votre mot de passe a bien été modifié","flash", array('class' => 'success'));
                return $this->redirect(array('action' => 'login'));
            }
        }
    }

    function admin_index(){
        $d['users'] = $this->Paginate('User');
        $this->set($d);
    }

    function admin_edit($id=null){
        
        if($this->request->is('post') || $this->request->is('put') ){
            $d = $this->request->data['User'];
            if($d['password'] != $d['passwordconfirm']){
                $this->Session->setFlash("Les mots de passes ne correspondent pas","flash",array('type'=>'danger'));
            }else{

                if(isset($d['id']) && empty($d['password']))
                    unset($d['password']);
                else
                    $d['password'] = AuthComponent::password($d['password']);
                    
                if($this->User->save($d)){
                    $this->Session->setFlash("L'utilisateur a bien été enregistré","flash");
                    return $this->redirect(array('action' => 'index'));
                }
            }
        }elseif($id){
            $this->User->id = $id;
            $this->request->data = $this->User->read();
            unset($this->request->data['User']['password']);
        }
        $roles = $this->User->Role->find('list');
        $this->set(compact('roles'));
    }

    function admin_delete($id){
        $this->User->delete($id);
        $this->Session->setFlash("L'utilisateur a bien été supprimé","flash");
        $this->redirect($this->referer());
    }
}
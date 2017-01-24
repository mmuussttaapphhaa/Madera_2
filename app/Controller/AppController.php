<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Cookie',
        'Auth' => array(
            'authenticate' => array('Form')
            )
    );

    public $helpers = array("Html", "Form");

    function beforeFilter(){
        
        $this->Auth->allow();

        $this->Auth->loginAction = array('controller'=>'users','action'=>'login','admin'=>false);
        $this->Auth->authorize = array('Controller');
        if(!isset($this->request->params['prefix'])){
            
        }

       

        if(isset($this->request->params['prefix'])){
             if($this->request->is('ajax'))
                $this->layout = "ajax";
            else
                $this->layout = 'default';
        }

    }


    function isAuthorized($user){
        if(!isset($this->request->params['prefix'])){
            return true;
        }
        $this->loadModel('Role');
        $roles = $this->Role->find('list',array('fields'=>array('prefix','level')));
        if(isset($roles[$this->request->params['prefix']])){
            $lvlAction = $roles[$this->request->params['prefix']];
            $lvlUser   = $roles[$user['Role']['prefix']];
            if($lvlUser > $lvlAction){
                return true;
            }elseif($lvlUser == $lvlAction){
                if($this->request->params['prefix'] == $user['Role']['prefix'])
                    return true;
            }
        }
        return false;
    }

}

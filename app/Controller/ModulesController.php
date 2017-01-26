<?php
App::uses('AppController', 'Controller');
/**
 * Modules Controller
 *
 * @property Module $Module
 * @property PaginatorComponent $Paginator
 */
class ModulesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * stock_index method
 *
 * @return void
 */
	public function stock_index() {
		$this->Module->recursive = 0;
		$this->set('modules', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		$options = array('conditions' => array('Module.' . $this->Module->primaryKey => $id));
		$this->set('module', $this->Module->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Module->create();
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		}
		$units = $this->Module->Unit->find('list');
		$families = $this->Module->Composant->Family->find('list');
		foreach($families as $k => $v){
			$composants[$v] = $this->Module->Composant->find('list',array('conditions'=>array('family_id'=>$k)));
		}
		$this->set(compact('units', 'composants'));
	}

/**
 * stock_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_edit($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Module.' . $this->Module->primaryKey => $id));
			$this->request->data = $this->Module->find('first', $options);
		}
		$units = $this->Module->Unit->find('list');
		$families = $this->Module->Composant->Family->find('list');		
		foreach($families as $k => $v){
			$composants[$v] = $this->Module->Composant->find('list',array('conditions'=>array('family_id'=>$k)));
		}
		$this->set(compact('units', 'composants'));
	}

/**
 * stock_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_delete($id = null) {
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Module->delete()) {
			$this->Session->setFlash(__('The module has been deleted.'));
		} else {
			$this->Session->setFlash(__('The module could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

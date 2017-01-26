<?php
App::uses('AppController', 'Controller');
/**
 * Fundations Controller
 *
 * @property Fundation $Fundation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FundationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * stock_index method
 *
 * @return void
 */
	public function stock_index() {
		$this->Fundation->recursive = 0;
		$this->set('fundations', $this->Fundation->find('all'));
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Fundation->exists($id)) {
			throw new NotFoundException(__('Invalid fundation'));
		}
		$options = array('conditions' => array('Fundation.' . $this->Fundation->primaryKey => $id));
		$this->set('fundation', $this->Fundation->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Fundation->create();
			if ($this->Fundation->save($this->request->data)) {
				$this->Session->setFlash(__('The fundation has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The fundation could not be saved. Please, try again.'));
			}
		}
	}

/**
 * stock_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_edit($id = null) {
		if (!$this->Fundation->exists($id)) {
			throw new NotFoundException(__('Invalid fundation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fundation->save($this->request->data)) {
				$this->Session->setFlash(__('The fundation has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The fundation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fundation.' . $this->Fundation->primaryKey => $id));
			$this->request->data = $this->Fundation->find('first', $options);
		}
	}

/**
 * stock_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_delete($id = null) {
		$this->Fundation->id = $id;
		if (!$this->Fundation->exists()) {
			throw new NotFoundException(__('Invalid fundation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fundation->delete()) {
			$this->Session->setFlash(__('The fundation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fundation could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Parameters Controller
 *
 * @property Parameter $Parameter
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ParametersController extends AppController {

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
		$this->Parameter->recursive = 0;
		$this->set('parameters', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
		$this->set('parameter', $this->Parameter->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Parameter->create();
			if ($this->Parameter->save($this->request->data)) {
				$this->Session->setFlash(__('The parameter has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The parameter could not be saved. Please, try again.'));
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
		if (!$this->Parameter->exists($id)) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parameter->save($this->request->data)) {
				$this->Session->setFlash(__('The parameter has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The parameter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parameter.' . $this->Parameter->primaryKey => $id));
			$this->request->data = $this->Parameter->find('first', $options);
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
		$this->Parameter->id = $id;
		if (!$this->Parameter->exists()) {
			throw new NotFoundException(__('Invalid parameter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Parameter->delete()) {
			$this->Session->setFlash(__('The parameter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parameter could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}

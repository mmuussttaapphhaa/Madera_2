<?php
App::uses('AppController', 'Controller');
/**
 * Units Controller
 *
 * @property Unit $Unit
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UnitsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

/**
 * stock_index method
 *
 * @return void
 */
	public function stock_index() {
		$this->Unit->recursive = 0;
		$this->set('units', $this->Unit->find('all'));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Unit->create();
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('The unit has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.'));
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
		if (!$this->Unit->exists($id)) {
			throw new NotFoundException(__('Invalid unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('The unit has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Unit.' . $this->Unit->primaryKey => $id));
			$this->request->data = $this->Unit->find('first', $options);
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
		$this->Unit->id = $id;
		if (!$this->Unit->exists()) {
			throw new NotFoundException(__('Invalid unit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Unit->delete()) {
			$this->Session->setFlash(__('The unit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The unit could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}

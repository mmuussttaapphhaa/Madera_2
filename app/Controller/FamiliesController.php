<?php
App::uses('AppController', 'Controller');
/**
 * Families Controller
 *
 * @property Family $Family
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamiliesController extends AppController {

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
		$this->Family->recursive = 0;
		$this->set('families', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Family->exists($id)) {
			throw new NotFoundException(__('Invalid family'));
		}
		$options = array('conditions' => array('Family.' . $this->Family->primaryKey => $id));
		$this->set('family', $this->Family->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Family->create();
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('The family has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
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
		if (!$this->Family->exists($id)) {
			throw new NotFoundException(__('Invalid family'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('The family has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Family.' . $this->Family->primaryKey => $id));
			$this->request->data = $this->Family->find('first', $options);
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
		$this->Family->id = $id;
		if (!$this->Family->exists()) {
			throw new NotFoundException(__('Invalid family'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Family->delete()) {
			$this->Session->setFlash(__('The family has been deleted.'));
		} else {
			$this->Session->setFlash(__('The family could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

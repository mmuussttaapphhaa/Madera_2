<?php
App::uses('AppController', 'Controller');
/**
 * Gammes Controller
 *
 * @property Gamme $Gamme
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GammesController extends AppController {

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
		$this->Gamme->recursive = 0;
		$this->set('gammes', $this->Gamme->find('all'));
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Gamme->exists($id)) {
			throw new NotFoundException(__('Invalid gamme'));
		}
		$options = array('conditions' => array('Gamme.' . $this->Gamme->primaryKey => $id));
		$this->set('gamme', $this->Gamme->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Gamme->create();
			if ($this->Gamme->save($this->request->data)) {
				$this->Session->setFlash(__('The gamme has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The gamme could not be saved. Please, try again.'));
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
		if (!$this->Gamme->exists($id)) {
			throw new NotFoundException(__('Invalid gamme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gamme->save($this->request->data)) {
				$this->Session->setFlash(__('The gamme has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The gamme could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gamme.' . $this->Gamme->primaryKey => $id));
			$this->request->data = $this->Gamme->find('first', $options);
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
		$this->Gamme->id = $id;
		if (!$this->Gamme->exists()) {
			throw new NotFoundException(__('Invalid gamme'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Gamme->delete()) {
			$this->Session->setFlash(__('The gamme has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gamme could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}

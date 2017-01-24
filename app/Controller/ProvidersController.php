<?php
App::uses('AppController', 'Controller');
/**
 * Providers Controller
 *
 * @property Provider $Provider
 * @property PaginatorComponent $Paginator
 */
class ProvidersController extends AppController {

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
	public function stock_index($p = null) {
		$this->Provider->recursive = 0;
		$this->set('providers', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
		$this->set('provider', $this->Provider->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Provider->create();
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
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
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Provider->save($this->request->data)) {
				$this->Session->setFlash(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
			$this->request->data = $this->Provider->find('first', $options);
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
		$this->Provider->id = $id;
		if (!$this->Provider->exists()) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Provider->delete()) {
			$this->Session->setFlash(__('The provider has been deleted.'));
		} else {
			$this->Session->setFlash(__('The provider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

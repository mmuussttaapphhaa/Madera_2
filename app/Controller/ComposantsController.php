<?php
App::uses('AppController', 'Controller');
/**
 * Composants Controller
 *
 * @property Composant $Composant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComposantsController extends AppController {

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
		$this->Composant->recursive = 0;
		$this->set('composants', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
		$this->set('composant', $this->Composant->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Composant->create();
			if ($this->Composant->save($this->request->data)) {
				$this->Session->setFlash(__('The composant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composant could not be saved. Please, try again.'));
			}
		}
		$families = $this->Composant->Family->find('list');
		$taxes = $this->Composant->Tax->find('list');
		$providers = $this->Composant->Provider->find('list');
		$this->set(compact('families', 'taxes', 'providers'));
	}

/**
 * stock_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_edit($id = null) {
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Composant->save($this->request->data)) {
				$this->Session->setFlash(__('The composant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
			$this->request->data = $this->Composant->find('first', $options);
		}
		$families = $this->Composant->Family->find('list');
		$taxes = $this->Composant->Tax->find('list');
		$providers = $this->Composant->Provider->find('list');
		$this->set(compact('families', 'taxes', 'providers'));
	}

/**
 * stock_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_delete($id = null) {
		$this->Composant->id = $id;
		if (!$this->Composant->exists()) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Composant->delete()) {
			$this->Session->setFlash(__('The composant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The composant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

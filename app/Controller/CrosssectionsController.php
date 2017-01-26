<?php
App::uses('AppController', 'Controller');
/**
 * Crosssections Controller
 *
 * @property Crosssection $Crosssection
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CrosssectionsController extends AppController {

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
		$this->Crosssection->recursive = 0;
		$this->set('crosssections', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Crosssection->exists($id)) {
			throw new NotFoundException(__('Invalid crosssection'));
		}
		$options = array('conditions' => array('Crosssection.' . $this->Crosssection->primaryKey => $id));
		$this->set('crosssection', $this->Crosssection->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Crosssection->create();
			if ($this->Crosssection->save($this->request->data)) {
				$this->Session->setFlash(__('The crosssection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crosssection could not be saved. Please, try again.'));
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
		if (!$this->Crosssection->exists($id)) {
			throw new NotFoundException(__('Invalid crosssection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Crosssection->save($this->request->data)) {
				$this->Session->setFlash(__('The crosssection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crosssection could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Crosssection.' . $this->Crosssection->primaryKey => $id));
			$this->request->data = $this->Crosssection->find('first', $options);
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
		$this->Crosssection->id = $id;
		if (!$this->Crosssection->exists()) {
			throw new NotFoundException(__('Invalid crosssection'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Crosssection->delete()) {
			$this->Session->setFlash(__('The crosssection has been deleted.'));
		} else {
			$this->Session->setFlash(__('The crosssection could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Modeles Controller
 *
 * @property Modele $Modele
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ModelesController extends AppController {

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
		$this->Modele->recursive = 0;
		$this->set('modeles', $this->Paginator->paginate());
	}

/**
 * stock_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_view($id = null) {
		if (!$this->Modele->exists($id)) {
			throw new NotFoundException(__('Invalid modele'));
		}
		$options = array('conditions' => array('Modele.' . $this->Modele->primaryKey => $id));
		$this->set('modele', $this->Modele->find('first', $options));
	}

/**
 * stock_add method
 *
 * @return void
 */
	public function stock_add() {
		if ($this->request->is('post')) {
			$this->Modele->create();
			if ($this->Modele->save($this->request->data)) {
				$this->Session->setFlash(__('The modele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modele could not be saved. Please, try again.'));
			}
		}
		$parameters = $this->Modele->Parameter->find('list');
		$gammes = $this->Modele->Gamme->find('list');
		$crosssections = $this->Modele->Crosssection->find('list');
		$fundations = $this->Modele->Fundation->find('list');
		$taxes = $this->Modele->Tax->find('list');
		$families = $this->Modele->Composant->Family->find('list',array('conditions'=>'modele_use=1'));
		foreach($families as $k => $v){
			$composants[$v] = $this->Modele->Composant->find('list',array('conditions'=>array('family_id'=>$k)));
		}
		$this->set(compact('parameters', 'gammes', 'crosssections', 'fundations','taxes','composants'));
	}

/**
 * stock_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_edit($id = null) {
		if (!$this->Modele->exists($id)) {
			throw new NotFoundException(__('Invalid modele'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Modele->save($this->request->data)) {
				$this->Session->setFlash(__('The modele has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modele could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Modele.' . $this->Modele->primaryKey => $id));
			$this->request->data = $this->Modele->find('first', $options);
		}
		$parameters = $this->Modele->Parameter->find('list');
		$gammes = $this->Modele->Gamme->find('list');
		$crosssections = $this->Modele->Crosssection->find('list');
		$fundations = $this->Modele->Fundation->find('list');
		$taxes = $this->Modele->Tax->find('list');
		$families = $this->Modele->Composant->Family->find('list',array('conditions'=>'modele_use=1'));
		foreach($families as $k => $v){
			$composants[$v] = $this->Modele->Composant->find('list',array('conditions'=>array('family_id'=>$k)));
		}
		$this->set(compact('parameters', 'gammes', 'crosssections', 'fundations','taxes','composants'));
	}

/**
 * stock_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function stock_delete($id = null) {
		$this->Modele->id = $id;
		if (!$this->Modele->exists()) {
			throw new NotFoundException(__('Invalid modele'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Modele->delete()) {
			$this->Session->setFlash(__('The modele has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modele could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

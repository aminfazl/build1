<?php
App::uses('AppController', 'Controller');
/**
 * Households Controller
 *
 * @property Household $Household
 */
class HouseholdsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Household->recursive = 0;
		$this->set('households', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Household->id = $id;
		if (!$this->Household->exists()) {
			throw new NotFoundException(__('Invalid household'));
		}
		$this->set('household', $this->Household->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Household->create();
			if ($this->Household->save($this->request->data)) {
				$this->Session->setFlash(__('The household has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The household could not be saved. Please, try again.'));
			}
		}
		$states = $this->Household->State->find('list');
		$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Household->id = $id;
		if (!$this->Household->exists()) {
			throw new NotFoundException(__('Invalid household'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Household->save($this->request->data)) {
				$this->Session->setFlash(__('The household has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The household could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Household->read(null, $id);
		}
		$states = $this->Household->State->find('list');
		$this->set(compact('states'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Household->id = $id;
		if (!$this->Household->exists()) {
			throw new NotFoundException(__('Invalid household'));
		}
		if ($this->Household->delete()) {
			$this->Session->setFlash(__('Household deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Household was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

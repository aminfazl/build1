<?php
App::uses('AppController', 'Controller');
/**
 * Matchings Controller
 *
 * @property Matching $Matching
 */
class MatchingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Matching->recursive = 0;
		$this->set('matchings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Matching->id = $id;
		if (!$this->Matching->exists()) {
			throw new NotFoundException(__('Invalid matching'));
		}
		$this->set('matching', $this->Matching->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Matching->create();
			if ($this->Matching->save($this->request->data)) {
				$this->Session->setFlash(__('The matching has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matching could not be saved. Please, try again.'));
			}
		}
		$volunteers = $this->Matching->Volunteer->find('list');
		$clients = $this->Matching->Client->find('list');
		$this->set(compact('volunteers', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Matching->id = $id;
		if (!$this->Matching->exists()) {
			throw new NotFoundException(__('Invalid matching'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Matching->save($this->request->data)) {
				$this->Session->setFlash(__('The matching has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matching could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Matching->read(null, $id);
		}
		$volunteers = $this->Matching->Volunteer->find('list');
		$clients = $this->Matching->Client->find('list');
		$this->set(compact('volunteers', 'clients'));
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
		$this->Matching->id = $id;
		if (!$this->Matching->exists()) {
			throw new NotFoundException(__('Invalid matching'));
		}
		if ($this->Matching->delete()) {
			$this->Session->setFlash(__('Matching deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Matching was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

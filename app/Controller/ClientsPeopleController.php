<?php
App::uses('AppController', 'Controller');
/**
 * ClientsPeople Controller
 *
 * @property ClientsPerson $ClientsPerson
 */
class ClientsPeopleController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsPerson->recursive = 0;
		$this->set('clientsPeople', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsPerson->id = $id;
		if (!$this->ClientsPerson->exists()) {
			throw new NotFoundException(__('Invalid clients person'));
		}
		$this->set('clientsPerson', $this->ClientsPerson->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsPerson->create();
			if ($this->ClientsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The clients person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients person could not be saved. Please, try again.'));
			}
		}
		$relativetypes = $this->ClientsPerson->Relativetype->find('list');
		$people = $this->ClientsPerson->Person->find('list');
		$clients = $this->ClientsPerson->Client->find('list');
		$this->set(compact('relativetypes', 'people', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientsPerson->id = $id;
		if (!$this->ClientsPerson->exists()) {
			throw new NotFoundException(__('Invalid clients person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The clients person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients person could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsPerson->read(null, $id);
		}
		$relativetypes = $this->ClientsPerson->Relativetype->find('list');
		$people = $this->ClientsPerson->Person->find('list');
		$clients = $this->ClientsPerson->Client->find('list');
		$this->set(compact('relativetypes', 'people', 'clients'));
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
		$this->ClientsPerson->id = $id;
		if (!$this->ClientsPerson->exists()) {
			throw new NotFoundException(__('Invalid clients person'));
		}
		if ($this->ClientsPerson->delete()) {
			$this->Session->setFlash(__('Clients person deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * ClientsParents Controller
 *
 * @property ClientsParent $ClientsParent
 */
class ClientsParentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsParent->recursive = 0;
		$this->set('clientsParents', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsParent->id = $id;
		if (!$this->ClientsParent->exists()) {
			throw new NotFoundException(__('Invalid clients parent'));
		}
		$this->set('clientsParent', $this->ClientsParent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsParent->create();
			if ($this->ClientsParent->save($this->request->data)) {
				$this->Session->setFlash(__('The clients parent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients parent could not be saved. Please, try again.'));
			}
		}
		$clientsParents = $this->ClientsParent->ClientsParent->find('list');
		$parentClientsParents = $this->ClientsParent->ParentClientsParent->find('list');
		$clients = $this->ClientsParent->Client->find('list');
		$this->set(compact('clientsParents', 'parentClientsParents', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientsParent->id = $id;
		if (!$this->ClientsParent->exists()) {
			throw new NotFoundException(__('Invalid clients parent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsParent->save($this->request->data)) {
				$this->Session->setFlash(__('The clients parent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients parent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsParent->read(null, $id);
		}
		$clientsParents = $this->ClientsParent->ClientsParent->find('list');
		$parentClientsParents = $this->ClientsParent->ParentClientsParent->find('list');
		$clients = $this->ClientsParent->Client->find('list');
		$this->set(compact('clientsParents', 'parentClientsParents', 'clients'));
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
		$this->ClientsParent->id = $id;
		if (!$this->ClientsParent->exists()) {
			throw new NotFoundException(__('Invalid clients parent'));
		}
		if ($this->ClientsParent->delete()) {
			$this->Session->setFlash(__('Clients parent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients parent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

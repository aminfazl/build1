<?php
App::uses('AppController', 'Controller');
/**
 * ClientsRelatives Controller
 *
 * @property ClientsRelative $ClientsRelative
 */
class ClientsRelativesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsRelative->recursive = 0;
		$this->set('clientsRelatives', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsRelative->id = $id;
		if (!$this->ClientsRelative->exists()) {
			throw new NotFoundException(__('Invalid clients relative'));
		}
		$this->set('clientsRelative', $this->ClientsRelative->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsRelative->create();
			if ($this->ClientsRelative->save($this->request->data)) {
				$this->Session->setFlash(__('The clients relative has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients relative could not be saved. Please, try again.'));
			}
		}
		$relativetypes = $this->ClientsRelative->Relativetype->find('list');
		$people = $this->ClientsRelative->Person->find('list');
		$clients = $this->ClientsRelative->Client->find('list');
		$this->set(compact('relativetypes', 'people', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientsRelative->id = $id;
		if (!$this->ClientsRelative->exists()) {
			throw new NotFoundException(__('Invalid clients relative'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsRelative->save($this->request->data)) {
				$this->Session->setFlash(__('The clients relative has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients relative could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsRelative->read(null, $id);
		}
		$relativetypes = $this->ClientsRelative->Relativetype->find('list');
		$people = $this->ClientsRelative->Person->find('list');
		$clients = $this->ClientsRelative->Client->find('list');
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
		$this->ClientsRelative->id = $id;
		if (!$this->ClientsRelative->exists()) {
			throw new NotFoundException(__('Invalid clients relative'));
		}
		if ($this->ClientsRelative->delete()) {
			$this->Session->setFlash(__('Clients relative deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients relative was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

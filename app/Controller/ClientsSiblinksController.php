<?php
App::uses('AppController', 'Controller');
/**
 * ClientsSiblinks Controller
 *
 * @property ClientsSiblink $ClientsSiblink
 */
class ClientsSiblinksController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsSiblink->recursive = 0;
		$this->set('clientsSiblinks', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsSiblink->id = $id;
		if (!$this->ClientsSiblink->exists()) {
			throw new NotFoundException(__('Invalid clients siblink'));
		}
		$this->set('clientsSiblink', $this->ClientsSiblink->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsSiblink->create();
			if ($this->ClientsSiblink->save($this->request->data)) {
				$this->Session->setFlash(__('The clients siblink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients siblink could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientsSiblink->Client->find('list');
		$siblinks = $this->ClientsSiblink->Siblink->find('list');
		$this->set(compact('clients', 'siblinks'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientsSiblink->id = $id;
		if (!$this->ClientsSiblink->exists()) {
			throw new NotFoundException(__('Invalid clients siblink'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsSiblink->save($this->request->data)) {
				$this->Session->setFlash(__('The clients siblink has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients siblink could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsSiblink->read(null, $id);
		}
		$clients = $this->ClientsSiblink->Client->find('list');
		$siblinks = $this->ClientsSiblink->Siblink->find('list');
		$this->set(compact('clients', 'siblinks'));
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
		$this->ClientsSiblink->id = $id;
		if (!$this->ClientsSiblink->exists()) {
			throw new NotFoundException(__('Invalid clients siblink'));
		}
		if ($this->ClientsSiblink->delete()) {
			$this->Session->setFlash(__('Clients siblink deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients siblink was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

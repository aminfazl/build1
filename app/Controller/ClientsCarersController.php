<?php
App::uses('AppController', 'Controller');
/**
 * ClientsCarers Controller
 *
 * @property ClientsCarer $ClientsCarer
 */
class ClientsCarersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsCarer->recursive = 0;
		$this->set('clientsCarers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsCarer->id = $id;
		if (!$this->ClientsCarer->exists()) {
			throw new NotFoundException(__('Invalid clients carer'));
		}
		$this->set('clientsCarer', $this->ClientsCarer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsCarer->create();
			if ($this->ClientsCarer->save($this->request->data)) {
				$this->Session->setFlash(__('The clients carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients carer could not be saved. Please, try again.'));
			}
		}
		$carers = $this->ClientsCarer->Carer->find('list');
		$clients = $this->ClientsCarer->Client->find('list');
		$this->set(compact('carers', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientsCarer->id = $id;
		if (!$this->ClientsCarer->exists()) {
			throw new NotFoundException(__('Invalid clients carer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsCarer->save($this->request->data)) {
				$this->Session->setFlash(__('The clients carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients carer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsCarer->read(null, $id);
		}
		$carers = $this->ClientsCarer->Carer->find('list');
		$clients = $this->ClientsCarer->Client->find('list');
		$this->set(compact('carers', 'clients'));
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
		$this->ClientsCarer->id = $id;
		if (!$this->ClientsCarer->exists()) {
			throw new NotFoundException(__('Invalid clients carer'));
		}
		if ($this->ClientsCarer->delete()) {
			$this->Session->setFlash(__('Clients carer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients carer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

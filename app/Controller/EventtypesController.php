<?php
App::uses('AppController', 'Controller');
/**
 * Eventtypes Controller
 *
 * @property Eventtype $Eventtype
 */
class EventtypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Eventtype->recursive = 0;
		$this->set('eventtypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Eventtype->id = $id;
		if (!$this->Eventtype->exists()) {
			throw new NotFoundException(__('Invalid eventtype'));
		}
		$this->set('eventtype', $this->Eventtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eventtype->create();
			if ($this->Eventtype->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Eventtype->id = $id;
		if (!$this->Eventtype->exists()) {
			throw new NotFoundException(__('Invalid eventtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Eventtype->save($this->request->data)) {
				$this->Session->setFlash(__('The eventtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Eventtype->read(null, $id);
		}
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
		$this->Eventtype->id = $id;
		if (!$this->Eventtype->exists()) {
			throw new NotFoundException(__('Invalid eventtype'));
		}
		if ($this->Eventtype->delete()) {
			$this->Session->setFlash(__('Eventtype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eventtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

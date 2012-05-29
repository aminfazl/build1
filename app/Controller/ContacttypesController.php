<?php
App::uses('AppController', 'Controller');
/**
 * Contacttypes Controller
 *
 * @property Contacttype $Contacttype
 */
class ContacttypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contacttype->recursive = 0;
		$this->set('contacttypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contacttype->id = $id;
		if (!$this->Contacttype->exists()) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		$this->set('contacttype', $this->Contacttype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contacttype->create();
			if ($this->Contacttype->save($this->request->data)) {
				$this->Session->setFlash(__('The contacttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacttype could not be saved. Please, try again.'));
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
		$this->Contacttype->id = $id;
		if (!$this->Contacttype->exists()) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contacttype->save($this->request->data)) {
				$this->Session->setFlash(__('The contacttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacttype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contacttype->read(null, $id);
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
		$this->Contacttype->id = $id;
		if (!$this->Contacttype->exists()) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		if ($this->Contacttype->delete()) {
			$this->Session->setFlash(__('Contacttype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contacttype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

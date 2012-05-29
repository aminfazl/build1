<?php
App::uses('AppController', 'Controller');
/**
 * Eventvenues Controller
 *
 * @property Eventvenue $Eventvenue
 */
class EventvenuesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Eventvenue->recursive = 0;
		$this->set('eventvenues', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Eventvenue->id = $id;
		if (!$this->Eventvenue->exists()) {
			throw new NotFoundException(__('Invalid eventvenue'));
		}
		$this->set('eventvenue', $this->Eventvenue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eventvenue->create();
			if ($this->Eventvenue->save($this->request->data)) {
				$this->Session->setFlash(__('The eventvenue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventvenue could not be saved. Please, try again.'));
			}
		}
		$states = $this->Eventvenue->State->find('list');
		$this->set(compact('states'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Eventvenue->id = $id;
		if (!$this->Eventvenue->exists()) {
			throw new NotFoundException(__('Invalid eventvenue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Eventvenue->save($this->request->data)) {
				$this->Session->setFlash(__('The eventvenue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventvenue could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Eventvenue->read(null, $id);
		}
		$states = $this->Eventvenue->State->find('list');
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
		$this->Eventvenue->id = $id;
		if (!$this->Eventvenue->exists()) {
			throw new NotFoundException(__('Invalid eventvenue'));
		}
		if ($this->Eventvenue->delete()) {
			$this->Session->setFlash(__('Eventvenue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eventvenue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

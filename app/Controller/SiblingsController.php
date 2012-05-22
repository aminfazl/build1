<?php
App::uses('AppController', 'Controller');
/**
 * Siblings Controller
 *
 * @property Sibling $Sibling
 */
class SiblingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sibling->recursive = 0;
		$this->set('siblings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sibling->id = $id;
		if (!$this->Sibling->exists()) {
			throw new NotFoundException(__('Invalid sibling'));
		}
		$this->set('sibling', $this->Sibling->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sibling->create();
			if ($this->Sibling->save($this->request->data)) {
				$this->Session->setFlash(__('The sibling has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sibling could not be saved. Please, try again.'));
			}
		}
		$families = $this->Sibling->Family->find('list');
		$this->set(compact('families'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sibling->id = $id;
		if (!$this->Sibling->exists()) {
			throw new NotFoundException(__('Invalid sibling'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sibling->save($this->request->data)) {
				$this->Session->setFlash(__('The sibling has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sibling could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sibling->read(null, $id);
		}
		$families = $this->Sibling->Family->find('list');
		$this->set(compact('families'));
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
		$this->Sibling->id = $id;
		if (!$this->Sibling->exists()) {
			throw new NotFoundException(__('Invalid sibling'));
		}
		if ($this->Sibling->delete()) {
			$this->Session->setFlash(__('Sibling deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sibling was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

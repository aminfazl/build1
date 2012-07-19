<?php
App::uses('AppController', 'Controller');
/**
 * Staffs Controller
 *
 * @property Staff $Staff
 */
class StaffsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Staff->recursive = 0;
		$this->set('staffs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff'));
		}
		$this->set('staff', $this->Staff->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Staff->create();
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.'));
			}
		}
		$users = $this->Staff->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Staff->save($this->request->data)) {
				$this->Session->setFlash(__('The staff has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Staff->read(null, $id);
		}
		$users = $this->Staff->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Staff->id = $id;
		if (!$this->Staff->exists()) {
			throw new NotFoundException(__('Invalid staff'));
		}
		if ($this->Staff->delete()) {
			$this->Session->setFlash(__('Staff deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Staff was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

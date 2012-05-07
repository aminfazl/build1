<?php
App::uses('AppController', 'Controller');
/**
 * Interests Controller
 *
 * @property Interest $Interest
 */
class InterestsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Interest->recursive = 0;
		$this->set('interests', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Interest->id = $id;
		if (!$this->Interest->exists()) {
			throw new NotFoundException(__('Invalid interest'));
		}
		$this->set('interest', $this->Interest->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interest->create();
			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash(__('The interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interest could not be saved. Please, try again.'));
			}
		}
		$filters = $this->Interest->Filter->find('list');
		$this->set(compact('filters'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Interest->id = $id;
		if (!$this->Interest->exists()) {
			throw new NotFoundException(__('Invalid interest'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Interest->save($this->request->data)) {
				$this->Session->setFlash(__('The interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interest could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Interest->read(null, $id);
		}
		$filters = $this->Interest->Filter->find('list');
		$this->set(compact('filters'));
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
		$this->Interest->id = $id;
		if (!$this->Interest->exists()) {
			throw new NotFoundException(__('Invalid interest'));
		}
		if ($this->Interest->delete()) {
			$this->Session->setFlash(__('Interest deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Interest was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

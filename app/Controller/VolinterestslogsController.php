<?php
App::uses('AppController', 'Controller');
/**
 * Volinterestslogs Controller
 *
 * @property Volinterestslog $Volinterestslog
 */
class VolinterestslogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Volinterestslog->recursive = 0;
		$this->set('volinterestslogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Volinterestslog->id = $id;
		if (!$this->Volinterestslog->exists()) {
			throw new NotFoundException(__('Invalid volinterestslog'));
		}
		$this->set('volinterestslog', $this->Volinterestslog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Volinterestslog->create();
			if ($this->Volinterestslog->save($this->request->data)) {
				$this->Session->setFlash(__('The volinterestslog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volinterestslog could not be saved. Please, try again.'));
			}
		}
		$interests = $this->Volinterestslog->Interest->find('list');
		$volunteers = $this->Volinterestslog->Volunteer->find('list');
		$this->set(compact('interests', 'volunteers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Volinterestslog->id = $id;
		if (!$this->Volinterestslog->exists()) {
			throw new NotFoundException(__('Invalid volinterestslog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Volinterestslog->save($this->request->data)) {
				$this->Session->setFlash(__('The volinterestslog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volinterestslog could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Volinterestslog->read(null, $id);
		}
		$interests = $this->Volinterestslog->Interest->find('list');
		$volunteers = $this->Volinterestslog->Volunteer->find('list');
		$this->set(compact('interests', 'volunteers'));
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
		$this->Volinterestslog->id = $id;
		if (!$this->Volinterestslog->exists()) {
			throw new NotFoundException(__('Invalid volinterestslog'));
		}
		if ($this->Volinterestslog->delete()) {
			$this->Session->setFlash(__('Volinterestslog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Volinterestslog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

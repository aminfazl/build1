<?php
App::uses('AppController', 'Controller');
/**
 * Interestslogs Controller
 *
 * @property Interestslog $Interestslog
 */
class InterestslogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Interestslog->recursive = 0;
		$this->set('interestslogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Interestslog->id = $id;
		if (!$this->Interestslog->exists()) {
			throw new NotFoundException(__('Invalid interestslog'));
		}
		$this->set('interestslog', $this->Interestslog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interestslog->create();
			if ($this->Interestslog->save($this->request->data)) {
				$this->Session->setFlash(__('The interestslog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interestslog could not be saved. Please, try again.'));
			}
		}
		$interests = $this->Interestslog->Interest->find('list');
		$clients = $this->Interestslog->Client->find('list');
		$this->set(compact('interests', 'clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Interestslog->id = $id;
		if (!$this->Interestslog->exists()) {
			throw new NotFoundException(__('Invalid interestslog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Interestslog->save($this->request->data)) {
				$this->Session->setFlash(__('The interestslog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interestslog could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Interestslog->read(null, $id);
		}
		$interests = $this->Interestslog->Interest->find('list');
		$clients = $this->Interestslog->Client->find('list');
		$this->set(compact('interests', 'clients'));
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
		$this->Interestslog->id = $id;
		if (!$this->Interestslog->exists()) {
			throw new NotFoundException(__('Invalid interestslog'));
		}
		if ($this->Interestslog->delete()) {
			$this->Session->setFlash(__('Interestslog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Interestslog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

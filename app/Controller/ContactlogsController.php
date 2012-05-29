<?php
App::uses('AppController', 'Controller');
/**
 * Contactlogs Controller
 *
 * @property Contactlog $Contactlog
 */
class ContactlogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contactlog->recursive = 0;
		$this->set('contactlogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contactlog->id = $id;
		if (!$this->Contactlog->exists()) {
			throw new NotFoundException(__('Invalid contactlog'));
		}
		$this->set('contactlog', $this->Contactlog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contactlog->create();
			if ($this->Contactlog->save($this->request->data)) {
				$this->Session->setFlash(__('The contactlog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactlog could not be saved. Please, try again.'));
			}
		}
		$contacttypes = $this->Contactlog->Contacttype->find('list');
		$people = $this->Contactlog->Person->find('list');
		$matchlogs = $this->Contactlog->Matchlog->find('list');
		$this->set(compact('contacttypes', 'people', 'matchlogs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Contactlog->id = $id;
		if (!$this->Contactlog->exists()) {
			throw new NotFoundException(__('Invalid contactlog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contactlog->save($this->request->data)) {
				$this->Session->setFlash(__('The contactlog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactlog could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contactlog->read(null, $id);
		}
		$contacttypes = $this->Contactlog->Contacttype->find('list');
		$people = $this->Contactlog->Person->find('list');
		$matchlogs = $this->Contactlog->Matchlog->find('list');
		$this->set(compact('contacttypes', 'people', 'matchlogs'));
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
		$this->Contactlog->id = $id;
		if (!$this->Contactlog->exists()) {
			throw new NotFoundException(__('Invalid contactlog'));
		}
		if ($this->Contactlog->delete()) {
			$this->Session->setFlash(__('Contactlog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contactlog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

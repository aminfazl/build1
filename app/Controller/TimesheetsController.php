<?php
App::uses('AppController', 'Controller');
/**
 * Timesheets Controller
 *
 * @property Timesheet $Timesheet
 */
class TimesheetsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Timesheet->recursive = 0;
		$this->set('timesheets', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		$this->set('timesheet', $this->Timesheet->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Timesheet->create();
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		}
		$activitytypes = $this->Timesheet->Activitytype->find('list');
		$clients = $this->Timesheet->Client->find('list');
		$volunteers = $this->Timesheet->Volunteer->find('list');
		$events = $this->Timesheet->Event->find('list');
		$this->set(compact('activitytypes', 'clients', 'volunteers', 'events'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Timesheet->read(null, $id);
		}
		$activitytypes = $this->Timesheet->Activitytype->find('list');
		$clients = $this->Timesheet->Client->find('list');
		$volunteers = $this->Timesheet->Volunteer->find('list');
		$events = $this->Timesheet->Event->find('list');
		$this->set(compact('activitytypes', 'clients', 'volunteers', 'events'));
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
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		if ($this->Timesheet->delete()) {
			$this->Session->setFlash(__('Timesheet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Timesheet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

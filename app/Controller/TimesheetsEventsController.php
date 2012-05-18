<?php
App::uses('AppController', 'Controller');
/**
 * TimesheetsEvents Controller
 *
 * @property TimesheetsEvent $TimesheetsEvent
 */
class TimesheetsEventsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimesheetsEvent->recursive = 0;
		$this->set('timesheetsEvents', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TimesheetsEvent->id = $id;
		if (!$this->TimesheetsEvent->exists()) {
			throw new NotFoundException(__('Invalid timesheets event'));
		}
		$this->set('timesheetsEvent', $this->TimesheetsEvent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimesheetsEvent->create();
			if ($this->TimesheetsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheets event has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheets event could not be saved. Please, try again.'));
			}
		}
		$timesheets = $this->TimesheetsEvent->Timesheet->find('list');
		$events = $this->TimesheetsEvent->Event->find('list');
		$this->set(compact('timesheets', 'events'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TimesheetsEvent->id = $id;
		if (!$this->TimesheetsEvent->exists()) {
			throw new NotFoundException(__('Invalid timesheets event'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TimesheetsEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheets event has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheets event could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TimesheetsEvent->read(null, $id);
		}
		$timesheets = $this->TimesheetsEvent->Timesheet->find('list');
		$events = $this->TimesheetsEvent->Event->find('list');
		$this->set(compact('timesheets', 'events'));
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
		$this->TimesheetsEvent->id = $id;
		if (!$this->TimesheetsEvent->exists()) {
			throw new NotFoundException(__('Invalid timesheets event'));
		}
		if ($this->TimesheetsEvent->delete()) {
			$this->Session->setFlash(__('Timesheets event deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Timesheets event was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

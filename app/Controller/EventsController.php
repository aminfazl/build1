<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 */
class EventsController extends AppController {

    

    var $name = 'Events';
    var $components = array('Filter');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Event->recursive = 0;
        $filter = $this->Filter->process($this);
		//$this->set('events', $this->paginate(null, $this->data));
		if($this->request->is('post')){
			$this->set('events', $this->paginate(null, array("Event.event_name like '%".$this->data['Event']['event_name']."%'")));
		}
		else{
			$this->set('events', $this->paginate(null));
		}
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->set('event', $this->Event->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$eventtypes = $this->Event->Eventtype->find('list');
		$venues = $this->Event->Venue->find('list');
		$clients = $this->Event->Client->find('list');
		$timesheets = $this->Event->Timesheet->find('list');
		$this->set(compact('eventtypes', 'venues', 'clients', 'timesheets'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Event->read(null, $id);
		}
		$eventtypes = $this->Event->Eventtype->find('list');
		$venues = $this->Event->Venue->find('list');
		$clients = $this->Event->Client->find('list');
		$timesheets = $this->Event->Timesheet->find('list');
		$this->set(compact('eventtypes', 'venues', 'clients', 'timesheets'));
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('Event deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

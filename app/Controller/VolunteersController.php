<?php
App::uses('AppController', 'Controller');
/**
 * Volunteers Controller
 *
 * @property Volunteer $Volunteer
 */
class VolunteersController extends AppController {
	
	 var $name = 'Volunteers';
    var $components = array('Filter');


/**
 * index method
 *
 * @return void
 */
 
	public function index() {
		$this->Volunteer->recursive = 0;
		       $filter = $this->Filter->process($this);
		
		if($this->request->is('post'))
		{//count whether first name have results
			$counted = count($this->paginate(array("Volunteer.first_name like '%".$this->data['Volunteer']['first_name']."%'")));
		
			if($counted != 0) //if first name has results
			{
				$this->set('volunteers', $this->paginate(array("Volunteer.first_name like '%".$this->data['Volunteer']['first_name']."%'")));
			}
			else // if first name has no result, search last name
			{
				$this->set('volunteers', $this->paginate(array("Volunteer.last_name like '%".$this->data['Volunteer']['first_name']."%'")));
			}
		}
		else
		{
			
			$this->set('volunteers', $this->paginate(null));
		}
		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Volunteer->id = $id;
		if (!$this->Volunteer->exists()) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		$this->set('volunteer', $this->Volunteer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Volunteer->create();
			if ($this->Volunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
			}
		}
		$volunteerstatuses = $this->Volunteer->Volunteerstatus->find('list');
		$communicationchannels = $this->Volunteer->Communicationchannel->find('list');
		$states = $this->Volunteer->State->find('list');
		$this->set(compact('volunteerstatuses', 'communicationchannels', 'states'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Volunteer->id = $id;
		if (!$this->Volunteer->exists()) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Volunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Volunteer->read(null, $id);
		}
		$volunteerstatuses = $this->Volunteer->Volunteerstatus->find('list');
		$communicationchannels = $this->Volunteer->Communicationchannel->find('list');
		$states = $this->Volunteer->State->find('list');
		$this->set(compact('volunteerstatuses', 'communicationchannels', 'states'));
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
		$this->Volunteer->id = $id;
		if (!$this->Volunteer->exists()) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		if ($this->Volunteer->delete()) {
			$this->Session->setFlash(__('Volunteer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Volunteer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

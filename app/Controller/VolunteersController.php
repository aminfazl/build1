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
		$this->Volunteer->recursive = 2;
		/*$options['joins'] = array(
array('table' => 'users',
'alias' => 'User',
'type' => 'LEFT',
'conditions' => array(
'Volunteer.user_id = User.id',
)
),
array('table' => 'states',
'alias' => 'State',
'type' => 'LEFT',
'conditions' => array(
'User.state_id = State.id',
)
)
);*/

//$options['fields'] = array('User.first_name', 'User.last_name');
		       $filter = $this->Filter->process($this);
		
		if($this->request->is('post'))
		{
			
				$this->set('volunteers', $this->paginate(array("User.first_name like '%".$this->data['Volunteer']['User']['first_name']."%' or User.last_name like '%".$this->data['Volunteer']['User']['first_name']."%'",  $options)));
		}
		else
		{
			//$this->paginate = 	$options;
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
		$this->Volunteer->recursive = 2;
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
			$VolData = array();
			$VolData['User'] = $this->request->data['User'];
			$UserCounter = 1;
			$UserStr = substr ($VolData['User']['first_name'] , 0 , 1 ) . substr ($VolData['User']['last_name'] , 0 , 3 );
			$this->request->data['User']['username'] = $UserStr . $UserCounter;
			$this->Volunteer->User->set( $this->data );
			$VolData['User']['username'] = $UserStr . $UserCounter;
			$VolData['User']['password'] = '1';
			$VolData['User']['group_id'] = Configure::read('Volunteer_group');
			$VolData['Volunteer'] = $this->request->data['Volunteer'];
			//debug($VolData);
			//die();
			while (!$this->Volunteer->User->validates(array('fieldList' => array('username')))) { 
				
				$UserCounter++;
				$VolData['User']['username'] = $UserStr . $UserCounter;
				$this->request->data['User']['username'] = $UserStr . $UserCounter;
				$this->Volunteer->User->set( $this->data );
			}// valid} else {    // invalid}
			
			if ($this->Volunteer->saveAll($VolData)) {
				$this->Session->setFlash(__('The volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
			}
		}
		$volunteerstatuses = $this->Volunteer->Volunteerstatus->find('list');
		$communicationchannels = $this->Volunteer->User->Communicationchannel->find('list');
		$states = $this->Volunteer->User->State->find('list');
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
			$VolData = array();
			$VolData['User'] = $this->request->data['User'];
			$VolData['Volunteer'] = $this->request->data['Volunteer'];
			//$VolData['Volunteer']['id'] = $this->Volunteer->id;
			
			

			if ($this->Volunteer->saveAll($VolData, array('validate'=>false))) {
				$this->Session->setFlash(__('The volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Volunteer->read(null, $id);
		}
		$volunteerstatuses = $this->Volunteer->Volunteerstatus->find('list');
		$communicationchannels = $this->Volunteer->User->Communicationchannel->find('list');
		$states = $this->Volunteer->User->State->find('list');
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

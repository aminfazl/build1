<?php
App::uses('AppController', 'Controller');
/**
 * EventsVolunteers Controller
 *
 * @property EventsVolunteer $EventsVolunteer
 */
class EventsVolunteersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->EventsVolunteer->recursive = 0;
		$this->set('eventsVolunteers', $this->paginate(array("event_id"=>$id)));
		$this->set('events', $this->EventsVolunteer->Event->find('all', array('conditions' => array('Event.id' => $id))));
		$this->set(compact('events'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EventsVolunteer->id = $id;
		if (!$this->EventsVolunteer->exists()) {
			throw new NotFoundException(__('Invalid events volunteer'));
		}
		$this->set('eventsVolunteer', $this->EventsVolunteer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventsVolunteer->create();
			if ($this->EventsVolunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The events volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events volunteer could not be saved. Please, try again.'));
			}
		}
		$volunteers = $this->EventsVolunteer->Volunteer->find('list');
		$events = $this->EventsVolunteer->Event->find('list');
		$this->set(compact('volunteers', 'events'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EventsVolunteer->id = $id;
		if (!$this->EventsVolunteer->exists()) {
			throw new NotFoundException(__('Invalid events volunteer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsVolunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The events volunteer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events volunteer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventsVolunteer->read(null, $id);
		}
		$volunteers = $this->EventsVolunteer->Volunteer->find('list');
		$events = $this->EventsVolunteer->Event->find('list');
		$this->set(compact('volunteers', 'events'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null, $clientId=null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->EventsVolunteer->id = $id;
		if (!$this->EventsVolunteer->exists()) {
			throw new NotFoundException(__('Invalid events volunteer'));
		}
		if ($this->EventsVolunteer->delete()) {
			$this->Session->setFlash(__('Events volunteer deleted'));
			$this->redirect(array('action' => 'index', $clientId));
		}
		$this->Session->setFlash(__('Events volunteer was not deleted'));
		$this->redirect(array('action' => 'index', $clientId));
	}
	
	public function bulk_add($id = null) {
		$this->EventsVolunteer->recursive = 2;
		
		//debug ($this->EventsVolunteer->Client->Family->Primarycarer);
		//die();
		//'$this->EventsVolunteer->Client->recursive=3;
		if ($this->request->is('post')) {
			$this->EventsVolunteer->create();
			$ValArray = array();
			//$ClientArray = array();
			$EmailArray = array();
			$IdArray = array();
			
			foreach ($this->request->data['EventsVolunteer']['volunteer_id'] as $value) {
				$ValArray[]= array('event_id'=>$id, 'volunteer_id'=>$value);
				$ClientDetails = $this->EventsVolunteer->Volunteer->find('first', array('conditions'=>array('Volunteer.id'=>$value)));
				$EmailArray[] = $ClientDetails['Volunteer']['email'];
				$IdArray[] = $value;
			}
			
			$email = new CakeEmail('gmail');
			$email->template('volunteerevent', 'default');
			$email->emailFormat('both');
			
			if ($this->EventsVolunteer->saveAll($ValArray)) {
				try
				{
					foreach ($EmailArray as $key=>$value) {
						$email->viewVars(array('id' => $this->EventsVolunteer->inserted_ids[$key]));
						$email->to($value);
						$email->subject('Event Invitation');
						$email->send();
					}
				}
				
				catch(Exception $e){
					debug ($e->getMessage());
					die();
				}
			//	 $logs = $dbo->getLog();
 // $lastLog = end($logs['log']);
  //debug( $lastLog['query']);
 //' die();

				
				$this->Session->setFlash(__('The booking has been saved'));
				$this->redirect(array('action' => 'index', $id));
			} else {
				$this->Session->setFlash(__('The booking could not be saved. Please, try again.'));
			}
		}
		
		$client_id_list = $this->EventsVolunteer->find('list', array('fields'=>array('EventsVolunteer.volunteer_id'), 'conditions'=>array('EventsVolunteer.event_id'=>$id)));
		//debug($client_id_list);
		//die();
		//$options['joins'] = array('table'=>'families', 'alias'=>'Family', 'type'=>'LEFT', 'conditions'=>array('Client.family_id = Family.id'));
		$options['conditions']  = array('OR'=>array('NOT'=>array('volunteer.id'=>$client_id_list)));
		/*$options['joins'] = array(
array('table' => 'families',
'alias' => 'Family',
'type' => 'LEFT',
'conditions' => array(
'Client.family_id = Family.id',
)
),
array('table' => 'carers',
'alias' => 'Primarycarer',
'type' => 'LEFT',
'conditions' => array(
'Family.primarycarer_ID = Primarycarer.id',
)
)
);*/

	$options['fields'] = array('Volunteer.id', 'Volunteer.last_name', 'Volunteer.first_name', 'Volunteer.street_address', 'Volunteer.suburb' );
//$this->loadModel('Client');
//$options['recursive']= 2;
//$this->Client->recursive = -1;

		
	$clients = $this->EventsVolunteer->Volunteer->find('all', $options);
	//debug ($clients);
	//die();

	$clients = Set::combine(
		   $clients,
		   '{n}.Volunteer.id',
		   array(
			 '{0} {1} {2} {3} {4}',
			 '{n}.Volunteer.last_name',
			 '{n}.Volunteer.first_name',
			 '{n}.Volunteer.birth_date',
			 '{n}.Volunteer.street_address',
			 '{n}.Volunteer.suburb'
		   )
	); 
	$this->set('events', $this->EventsVolunteer->Event->find('all', array('conditions' => array('Event.id' => $id))));
	$this->set(compact('events'));
	$this->set('volunteers',$clients); 
	}
	
	public function confirm($id = null) {
		$this->EventsVolunteer->id = $id;
		
		if (!$this->EventsVolunteer->exists()) {
			throw new NotFoundException(__('Invalid events client'));
		}
		
		$event = $this->EventsVolunteer->find('all', array('conditions'=>array('EventsVolunteer.id'=>$id)));
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsVolunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The booking has been saved'));
				
				$this->redirect(array('action' => 'index', $event[0]['EventsVolunteer']['event_id']));
			} else {
				$this->Session->setFlash(__('The booking could not be confirmed. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventsVolunteer->read(null, $id);
		}
		$clients = $this->EventsVolunteer->Volunteer->find('list');
		$events = $this->EventsVolunteer->Event->find('list');
		$this->set(compact('clients', 'events'));
	}
	
	public function attendance($id = null) {
		//$this->EventsVolunteer->recursive = 2;
		//debug ($this->EventsVolunteer->Client->Family->Primarycarer);
		//die();
		//'$this->EventsVolunteer->Client->recursive=3;
		if ($this->request->is('post')) {
			$this->EventsVolunteer->create();
			$ValArray = array();
			//$ClientArray = array();
			$EmailArray = array();
			$IdArray = array();
						
			$eventclient_id_list = $this->EventsVolunteer->find('list', array('fields'=>array('EventsVolunteer.id'), 'conditions'=>array('EventsVolunteer.event_id'=>$id)));
									
			foreach ($eventclient_id_list as $value) {
				$ValArray[]= array('id'=>$value, 'attended'=>'0');
			}
			
			$count = 0;
			foreach ($this->request->data['EventsVolunteer']['volunteer_id'] as $value) {
				$ValArray[$count]= array('id'=>$value, 'attended'=>'1');
				$count = $count + 1;
			}
			
			//debug($ValArray);
			//die();
			
			if ($this->EventsVolunteer->saveAll($ValArray)) {
				
			//	 $logs = $dbo->getLog();
 // $lastLog = end($logs['log']);
  //debug( $lastLog['query']);
 //' die();

				
				$this->Session->setFlash(__('The attendance has been saved'));
				$this->redirect(array('action' => 'index', $id));
			} else {
				$this->Session->setFlash(__('The attendence could not be saved. Please, try again.'));
			}
		}
		
		//$client_id_list = $this->EventsVolunteer->find('list', array('fields'=>array('EventsVolunteer.client_id'), 'conditions'=>array('EventsVolunteer.event_id'=>$id)));
		//debug($client_id_list);
		//die();
		//$options['joins'] = array('table'=>'families', 'alias'=>'Family', 'type'=>'LEFT', 'conditions'=>array('Client.family_id = Family.id'));
		$options['conditions']  = array(array('EventsVolunteer.event_id'=>$id));
		

		$options['fields'] = array('EventsVolunteer.id', 'EventsVolunteer.attended', 'Volunteer.last_name', 'Volunteer.first_name', 'Volunteer.street_address', 'Volunteer.suburb' );
		
			
		$volunteers = $this->EventsVolunteer->find('all', $options);
		$selected = array();
		foreach ($volunteers as $key=>$value)
		{
			if($value['EventsVolunteer']['attended'] == 1)
			{
				$selected[] = $value['EventsVolunteer']['id'];
			}
		}
		
		
		$volunteers = Set::combine(
			   $volunteers,
			   '{n}.EventsVolunteer.id',
			   array(
				 '{0} {1} {2} {3} {4}',
				 '{n}.Volunteer.last_name',
				 '{n}.Volunteer.first_name',
				 '{n}.Volunteer.street_address',
				 '{n}.Volunteer.suburb'
			   )
		); 
		$events = $this->EventsVolunteer->Event->find('list');
		$this->set(compact('events'));
		$this->set('volunteers',$volunteers); 
		
		$this->set('selected', $selected); 
		$this->set('event_id', $id); 
	}

}





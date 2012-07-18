<?php
App::uses('AppController', 'Controller');
/**
 * EventsClients Controller
 *
 * @property EventsClient $EventsClient
 */
class EventsClientsController extends AppController {

	
/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->EventsClient->recursive = 0;
		$this->set('eventsClients', $this->paginate(array("event_id"=>$id)));
		$this->set('events', $this->EventsClient->Event->find('all', array('conditions' => array('Event.id' => $id))));
		$this->set(compact('events'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EventsClient->id = $id;
		if (!$this->EventsClient->exists()) {
			throw new NotFoundException(__('Invalid events client'));
		}
		$this->set('eventsClient', $this->EventsClient->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$this->EventsClient->create();
			if ($this->EventsClient->save($this->request->data)) {
				$this->Session->setFlash(__('The events client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events client could not be saved. Please, try again.'));
			}
		}
		$clients = $this->EventsClient->Client->find('list');
		$events = $this->EventsClient->Event->find('list');
		$this->set(compact('clients', 'events'));
	}
	
	public function bulk_add($id = null) {
		$this->EventsClient->recursive = 2;
		//debug ($this->EventsClient->Client->Family->Primarycarer);
		//die();
		//'$this->EventsClient->Client->recursive=3;
		if ($this->request->is('post')) {
			$this->EventsClient->create();
			$ValArray = array();
			//$ClientArray = array();
			$EmailArray = array();
			$IdArray = array();
			
			foreach ($this->request->data['EventsClient']['client_id'] as $value) {
				$ValArray[]= array('event_id'=>$id, 'client_id'=>$value);
				$ClientDetails = $this->EventsClient->Client->find('first', array('conditions'=>array('Client.id'=>$value)));
				$EmailArray[] = $ClientDetails['Client']['email'];
				$IdArray[] = $value;
			}
			
			$email = new CakeEmail('gmail');
			$email->template('clientevent', 'default');
			$email->emailFormat('both');
			
			if ($this->EventsClient->saveAll($ValArray)) {
				try
				{
					foreach ($EmailArray as $key=>$value) {
						$email->viewVars(array('id' => $this->EventsClient->inserted_ids[$key]));
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
		
		$client_id_list = $this->EventsClient->find('list', array('fields'=>array('EventsClient.client_id'), 'conditions'=>array('EventsClient.event_id'=>$id)));
		//debug($client_id_list);
		//die();
		//$options['joins'] = array('table'=>'families', 'alias'=>'Family', 'type'=>'LEFT', 'conditions'=>array('Client.family_id = Family.id'));
		$options['conditions']  = array('OR'=>array('NOT'=>array('Client.id'=>$client_id_list)));
		$options['joins'] = array(
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
);

$options['fields'] = array('Client.id', 'Client.last_name', 'Client.first_name', 'Primarycarer.street_address', 'Primarycarer.suburb' );
$this->loadModel('Client');
//$options['recursive']= 2;
$this->Client->recursive = -1;

		
		$clients = $this->Client->find('all', $options);
		//debug ($clients);
		//die();

		$clients = Set::combine(
               $clients,
               '{n}.Client.id',
               array(
                 '{0} {1} {2} {3} {4}',
                 '{n}.Client.last_name',
                 '{n}.Client.first_name',
                 '{n}.Client.birth_date',
				 '{n}.Primarycarer.street_address',
				 '{n}.Primarycarer.suburb'
               )
        ); 
		$this->set('events', $this->EventsClient->Event->find('all', array('conditions' => array('Event.id' => $id))));
		$this->set(compact('events'));
		$this->set('clients',$clients); 
	}
	
	public function attendance($id = null) {
		$this->EventsClient->recursive = 2;
		//debug ($this->EventsClient->Client->Family->Primarycarer);
		//die();
		//'$this->EventsClient->Client->recursive=3;
		if ($this->request->is('post')) {
			$this->EventsClient->create();
			$ValArray = array();
			//$ClientArray = array();
			$EmailArray = array();
			$IdArray = array();
						
			$eventclient_id_list = $this->EventsClient->find('list', array('fields'=>array('EventsClient.id'), 'conditions'=>array('EventsClient.event_id'=>$id)));
									
			foreach ($eventclient_id_list as $value) {
				$ValArray[]= array('id'=>$value, 'attended'=>'0');
			}
			
			$count = 0;
			foreach ($this->request->data['EventsClient']['client_id'] as $value) {
				$ValArray[$count]= array('id'=>$value, 'attended'=>'1');
				$count = $count + 1;
			}
			
			//debug($ValArray);
			//die();
			
			if ($this->EventsClient->saveAll($ValArray)) {
				
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
		
		//$client_id_list = $this->EventsClient->find('list', array('fields'=>array('EventsClient.client_id'), 'conditions'=>array('EventsClient.event_id'=>$id)));
		//debug($client_id_list);
		//die();
		//$options['joins'] = array('table'=>'families', 'alias'=>'Family', 'type'=>'LEFT', 'conditions'=>array('Client.family_id = Family.id'));
		$options['conditions']  = array(array('EventsClient.event_id'=>$id));
		$options['joins'] = array(
array('table' => 'events_clients',
'alias' => 'EventsClient',
'type' => 'LEFT',
'conditions' => array(
'EventsClient.client_id = Client.id',
)
),
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
);

$options['fields'] = array('EventsClient.id', 'EventsClient.attended', 'Client.last_name', 'Client.first_name', 'Primarycarer.street_address', 'Primarycarer.suburb' );
$this->loadModel('Client');
//$options['recursive']= 2;
$this->Client->recursive = -1;

		
		$clients = $this->Client->find('all', $options);
		$selected = array();
		foreach ($clients as $key=>$value)
		{
			if($value['EventsClient']['attended'] == 1)
			{
				$selected[] = $value['EventsClient']['id'];
			}
		}
		
		
		$clients = Set::combine(
               $clients,
               '{n}.EventsClient.id',
               array(
                 '{0} {1} {2} {3} {4}',
                 '{n}.Client.last_name',
                 '{n}.Client.first_name',
                 '{n}.Primarycarer.street_address',
				 '{n}.Primarycarer.suburb'
               )
        ); 
		$events = $this->EventsClient->Event->find('list');
		$this->set(compact('events'));
		$this->set('clients',$clients); 
		
		$this->set('selected', $selected); 
		$this->set('event_id', $id); 
	}


/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EventsClient->id = $id;
		if (!$this->EventsClient->exists()) {
			throw new NotFoundException(__('Invalid events client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsClient->save($this->request->data)) {
				$this->Session->setFlash(__('The events client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The events client could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventsClient->read(null, $id);
		}
		$clients = $this->EventsClient->Client->find('list');
		$events = $this->EventsClient->Event->find('list');
		$this->set(compact('clients', 'events'));
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
		$this->EventsClient->id = $id;
		if (!$this->EventsClient->exists()) {
			throw new NotFoundException(__('Invalid events client'));
		}
		if ($this->EventsClient->delete()) {
			$this->Session->setFlash(__('Events client deleted'));
			$this->redirect(array('action' => 'index', $clientId));
		}
		$this->Session->setFlash(__('Events client was not deleted'));
		$this->redirect(array('action' => 'index', $clientId));
	}
	
	public function confirm($id = null) {
		$this->EventsClient->id = $id;
		if (!$this->EventsClient->exists()) {
			throw new NotFoundException(__('Invalid events client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventsClient->save($this->request->data)) {
				$this->Session->setFlash(__('The events client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The booking could not be confirmed. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventsClient->read(null, $id);
		}
		$clients = $this->EventsClient->Client->find('list');
		$events = $this->EventsClient->Event->find('list');
		$this->set(compact('clients', 'events'));
	}
}

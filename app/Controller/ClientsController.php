<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Client->recursive = 2;
        //$filter = $this->Filter->process($this);
		//$this->set('events', $this->paginate(null, $this->data));
		/*if($this->request->is('post')){
			$this->set('clients', $this->paginate(null, array("Client.first_name like '%".$this->data['clients']['first_name']."%' or Client.last_name like '%".$this->data['clients']['first_name']."%'")));
		}
		else{*/
			$this->set('clients', $this->paginate(null));
		/*}*/
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->set('client', $this->Client->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		}
		$disabilities = $this->Client->Disability->find('list');
		$prioritylevels = $this->Client->Prioritylevel->find('list');
		$fundingsources = $this->Client->Fundingsource->find('list');
		$religions = $this->Client->Religion->find('list');
		$birthcountries = $this->Client->Birthcountry->find('list');
		$communicationchannels = $this->Client->Communicationchannel->find('list');
		$statuses = $this->Client->Status->find('list');
		$families = $this->Client->Family->find('list');
		$events = $this->Client->Event->find('list');
		$this->set(compact('disabilities', 'prioritylevels', 'fundingsources', 'religions', 'birthcountries', 'communicationchannels', 'statuses', 'families', 'events'));*/
		//$this->loadModel('Family');
		if ($this->request->is('post')) {
			$UserCounter = 1;
			$this->Client->create();
			if(isset($this->request->data['Family']['Primarycarer']))
			{
				
				$FamilyArray = array();
				$FamilyArray['User'] = $this->request->data['Family']['Primarycarer']["User"];
				$FamilyArray['Primarycarer'] = $this->request->data['Family']['Primarycarer']["Carer"];
			
				$UserCounter = 1;
				$UserStr = substr ($FamilyArray['User']['first_name'] , 0 , 1 ) . substr ($FamilyArray['User']['last_name'] , 0 , 3 );
				$FamilyArray['User']['username'] = $UserStr . $UserCounter;
				$FamilyArray['User']['password'] = '1';
				$FamilyArray['User']['group_id'] = Configure::read('Carer_group');
			
			//debug($FamilyArray);
			//die();
			while (!$this->Client->Family->Primarycarer->User->validates(array('fieldList' => array('username')))) { 
				
				$UserCounter++;
				$FamilyArray['User']['username'] = $UserStr . $UserCounter;
				$this->request->data['User']['username'] = $UserStr . $UserCounter;
				$this->Client->Family->Primarycarer->User->set( $this->data );
			}
				//debug($FamilyArray);
				//$this->Client->Family->Primarycarer->saveAll($FamilyArray);
				//die();
				if ($this->Client->Family->Primarycarer->saveAll($FamilyArray)) {
					$Primarycarer_id = $this->Client->Family->Primarycarer->getLastInsertID();
					
					if(isset($this->request->data['Family']['Secondarycarer']))
					{
						$FamilyArray['User'] = $this->request->data['Family']['Secondarycarer']["User"];
						$FamilyArray['Secondarycarer'] = $this->request->data['Family']['Secondarycarer']["Carer"];
						$FamilyArray['User']['username'] = $UserStr . $UserCounter;
						$FamilyArray['User']['password'] = '1';
						$FamilyArray['User']['group_id'] = Configure::read('Carer_group');
						$UserStr = substr ($FamilyArray['User']['first_name'] , 0 , 1 ) . substr ($FamilyArray['User']['last_name'] , 0 , 3 );
						while (!$this->Client->Family->Secondarycarer->User->validates(array('fieldList' => array('username')))) { 
				
							$UserCounter++;
							$FamilyArray['User']['username'] = $UserStr . $UserCounter;
							$this->request->data['User']['username'] = $UserStr . $UserCounter;
							$this->Client->Family->Secondarycarer->User->set( $this->data );
						}
						
						if ($this->Client->Family->Secondarycarer->saveAll($FamilyArray)) {
							$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
						}
						
						else
						{
							$this->Session->setFlash(__('The secondary carer could not be saved. Please, try again.'));
						}
					}
					
					else if(isset($this->request->data['Family']['secondarycarer_ID']))
					{
							$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
					}
				}
				
				else
				{
					$this->Session->setFlash(__('The primary carer could not be saved. Please, try again.'));
					
				}
			}
			
			else if(isset($this->request->data['Family']['primarycarer_ID']))
			{
				$Primarycarer_id  = $this->request->data['Family']['primarycarer_ID'];
				if(isset($this->request->data['Family']['Secondarycarer']))
					{
						$FamilyArray['User'] = $this->request->data['Family']['Secondarycarer']["User"];
						$FamilyArray['Secondarycarer'] = $this->request->data['Family']['Secondarycarer']["Carer"];
						$FamilyArray['User']['username'] = $UserStr . $UserCounter;
						$FamilyArray['User']['password'] = '1';
						$FamilyArray['User']['group_id'] = Configure::read('Carer_group');
						$UserStr = substr ($FamilyArray['User']['first_name'] , 0 , 1 ) . substr ($FamilyArray['User']['last_name'] , 0 , 3 );
						while (!$this->Client->Family->Secondarycarer->User->validates(array('fieldList' => array('username')))) { 
				
							$UserCounter++;
							$FamilyArray['User']['username'] = $UserStr . $UserCounter;
							$this->request->data['User']['username'] = $UserStr . $UserCounter;
							$this->Client->Family->Secondarycarer->User->set( $this->data );
						}
						if ($this->Client->Family->Primarycarer->saveAll($FamilyArray)) {
							$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
						}
						
						else
						{
							$this->Session->setFlash(__('The secondary carer could not be saved. Please, try again.'));
						}
					}
					
					else if(isset($this->request->data['Family']['secondarycarer_ID']))
					{
							$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
					}
			}
			
			if(isset($Primarycarer_id))
			{
				$FamilyArray = array('primarycarer_ID'=>$Primarycarer_id);
				if(isset($Secondarycarer_id))
				{
					$FamilyArray['secondarycarer_ID'] = $Secondarycarer_id;
				}
				
				if ($this->Client->Family->saveAll($FamilyArray )) {
						$Family_id = $this->Client->Family->getLastInsertID();
						$this->request->data['Client']['family_id']=$Family_id;
						
						$clientArray = array();
						$clientArray['User'] = $this->request->data['User'];
						$clientArray['User']['username'] = $UserStr . $UserCounter;
						$clientArray['User']['password'] = '1';
						$clientArray['User']['group_id'] = Configure::read('Client_group');
						$clientArray['Client'] = $this->request->data['Client'];
						//$clientArray['Client']['family_id'] = $Family_id;
						$UserStr = substr ($clientArray['User']['first_name'] , 0 , 1 ) . substr ($clientArray['User']['last_name'] , 0 , 3 );
						while (!$this->Client->User->validates(array('fieldList' => array('username')))) { 
				
							$UserCounter++;
							$clientArray['User']['username'] = $UserStr . $UserCounter;
							$this->request->data['User']['username'] = $UserStr . $UserCounter;
							$this->Client->User->set( $this->data );
						}
						
						//debug ($clientArray);
						//die();
						//echo debug( $this->Client->Schema() );
//die();
						if ($this->Client->User->save($clientArray)) {
							$User_id = $this->Client->User->getLastInsertID();
							$clientArray['Client']['user_id'] = $User_id;
							if ($this->Client->save($clientArray)) {
								
								$this->Session->setFlash(__('The client has been saved'));
								$this->redirect(array('action' => 'index'));
							}
							
							 else {
								
								//debug($this->validationErrors); 
							//die();
								$this->Session->setFlash(__('The client could not be saved. One of the fields was entered incorrectly'));
									}
								} else {
								
								//debug($this->validationErrors); 
							//die();
								$this->Session->setFlash(__('The client could not be saved. One of the fields was entered incorrectly.'));
									}
		//				debug( $this->request->data['Family']);
						//$this->autoRender = false;
						//$this->Client->create();
						//if ($this->Client->saveAll($this->request->data['Client'])) {
						//	$this->Session->setFlash(__('The client has been saved'));
							//$this->redirect(array('action' => 'index'));
						//} else {
							//debug($this->validationErrors); 
							//die();
							//$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
							//$this->redirect(array('action' => 'index'));
					}
					
					else {
					//debug($this->validationErrors); 
					//die();
						$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
					}
			}
			
			else
			{
					$this->Session->setFlash(__('Primary carer was not selected or added'));
			}
			/*if(isset($this->request->data['Family']['Primarycarer']))
				if ($this->Client->Family->Primarycarer->save($this->request->data['Family']['Primarycarer'])) {
					$Primarycarer_id = $this->Client->Family->Primarycarer->getLastInsertID();
					if ($this->Client->Family->Secondarycarer->save($this->request->data['Family']['Secondarycarer'])) {
						$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
						$FamilyArray = array('primarycarer_ID'=>$Primarycarer_id, 'secondarycarer_ID'=>$Secondarycarer_id);
						if ($this->Client->Family->save($FamilyArray )) {
							$Family_id = $this->Client->Family->getLastInsertID();
							$this->request->data['Client']['family_id']=$Family_id;
							
							if ($this->Client->save($this->request->data['Client'])) {
								$this->Session->setFlash(__('The client has been saved'));
								$this->redirect(array('action' => 'index'));
								} else {
									$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
										}
			//				debug( $this->request->data['Family']);
							//$this->autoRender = false;
							//$this->Client->create();
							//if ($this->Client->saveAll($this->request->data['Client'])) {
							//	$this->Session->setFlash(__('The client has been saved'));
								//$this->redirect(array('action' => 'index'));
							//} else {
								//debug($this->validationErrors); 
								//die();
								//$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
								//$this->redirect(array('action' => 'index'));
						}
						
						else {
						//debug($this->validationErrors); 
						//die();
							$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
						}
					}
					
					else {
					//debug($this->validationErrors); 
					//die();
						$this->Session->setFlash(__('The secondary carer could not be saved. Please, try again.'));
					}
						
						
				}
					
				else {
					//debug($this->validationErrors); 
					//die();
					$this->Session->setFlash(__('The primary carer could not be saved. Please, try again.'));
				}
				
				else
				{
					if ($this->Client->Family->save($this->request->data['Family'])) 
					{
						$Family_id = $this->Client->Family->getLastInsertID();
						$this->request->data['Client']['family_id']=$Family_id;	
						if ($this->Client->save($this->request->data['Client'])) {
						$this->Session->setFlash(__('The client has been saved'));
						$this->redirect(array('action' => 'index'));
				    } else {
							$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
						}
						
					}
					
					else {
						//debug($this->validationErrors); 
						//die();
						$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
					}
				}*/
			
		}
		$disabilities = $this->Client->Disability->find('list');
		$prioritylevels = $this->Client->Prioritylevel->find('list');
		$fundingsources = $this->Client->Fundingsource->find('list');
		$religions = $this->Client->Religion->find('list');
		$birthcountries = $this->Client->Birthcountry->find('list');
		$communicationchannels = $this->Client->User->Communicationchannel->find('list');
		$statuses = $this->Client->Clientstatus->find('list');
		$families = $this->Client->Family->find('list');
		$events = $this->Client->User->Event->find('list');
		//$this->loadModel('Family');
		//$this->Family->loadModel("Carer");
		$incomesources = $this->Client->Family->Primarycarer->Incomesource->find('list');	
		$states = $this->Client->Family->Primarycarer->State->find('list');
		$lgacouncils = $this->Client->Family->Primarycarer->Lgacouncil->find('list');
		$languages= $this->Client->Family->Primarycarer->Language->find('list');
		
		$incomesources = $this->Client->Family->Secondarycarer->Incomesource->find('list');	
		$states = $this->Client->Family->Secondarycarer->State->find('list');
		$lgacouncils = $this->Client->Family->Secondarycarer->Lgacouncil->find('list');
		$languages= $this->Client->Family->Secondarycarer->Language->find('list');
		
		$this->set(compact('disabilities', 'prioritylevels', 'fundingsources', 'religions', 'birthcountries', 'communicationchannels', 'statuses', 'families', 'events', 'incomesources', 'states', 'lgacouncils', 'languages'));
		
	}
	
	public function add_test() {
		//$this->loadModel('Family');
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->Family->Primarycarer->save($this->request->data['Family']['Primarycarer'])) {
				$Primarycarer_id = $this->Client->Family->Primarycarer->getLastInsertID();
				if ($this->Client->Family->Secondarycarer->save($this->request->data['Family']['Secondarycarer'])) {
					$Secondarycarer_id = $this->Client->Family->Secondarycarer->getLastInsertID();
					$FamilyArray = array('primarycarer_ID'=>$Primarycarer_id, 'secondarycarer_ID'=>$Secondarycarer_id);
					if ($this->Client->Family->save($FamilyArray )) {
						$Family_id = $this->Client->Family->getLastInsertID();
						$this->request->data['Client']['family_id']=$Family_id;
						
						if ($this->Client->save($this->request->data['Client'])) {
							$this->Session->setFlash(__('The client has been saved'));
							$this->redirect(array('action' => 'index'));
							} else {
								$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
									}
		//				debug( $this->request->data['Family']);
						//$this->autoRender = false;
						//$this->Client->create();
						//if ($this->Client->saveAll($this->request->data['Client'])) {
						//	$this->Session->setFlash(__('The client has been saved'));
							//$this->redirect(array('action' => 'index'));
						//} else {
							//debug($this->validationErrors); 
							//die();
							//$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
							//$this->redirect(array('action' => 'index'));
					}
					
					else {
					//debug($this->validationErrors); 
					//die();
						$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
					}
				}
				
				else {
				//debug($this->validationErrors); 
				//die();
					$this->Session->setFlash(__('The secondary carer could not be saved. Please, try again.'));
				}
					
					
			}
				
			else {
				//debug($this->validationErrors); 
				//die();
				$this->Session->setFlash(__('The primary carer could not be saved. Please, try again.'));
			}
			
		}
		$disabilities = $this->Client->Disability->find('list');
		$prioritylevels = $this->Client->Prioritylevel->find('list');
		$fundingsources = $this->Client->Fundingsource->find('list');
		$religions = $this->Client->Religion->find('list');
		$birthcountries = $this->Client->Birthcountry->find('list');
		$communicationchannels = $this->Client->Communicationchannel->find('list');
		$statuses = $this->Client->Status->find('list');
		$families = $this->Client->Family->find('list');
		$events = $this->Client->Event->find('list');
		//$this->loadModel('Family');
		//$this->Family->loadModel("Carer");
		$incomesources = $this->Client->Family->Primarycarer->Incomesource->find('list');	
		$states = $this->Client->Family->Primarycarer->State->find('list');
		$lgacouncils = $this->Client->Family->Primarycarer->Lgacouncil->find('list');
		$languages= $this->Client->Family->Primarycarer->Language->find('list');
		
		$incomesources = $this->Client->Family->Secondarycarer->Incomesource->find('list');	
		$states = $this->Client->Family->Secondarycarer->State->find('list');
		$lgacouncils = $this->Client->Family->Secondarycarer->Lgacouncil->find('list');
		$languages= $this->Client->Family->Secondarycarer->Language->find('list');
		
		$this->set(compact('disabilities', 'prioritylevels', 'fundingsources', 'religions', 'birthcountries', 'communicationchannels', 'statuses', 'families', 'events', 'incomesources', 'states', 'lgacouncils', 'languages'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Client->read(null, $id);
		}
		$disabilities = $this->Client->Disability->find('list');
		$prioritylevels = $this->Client->Prioritylevel->find('list');
		$fundingsources = $this->Client->Fundingsource->find('list');
		$religions = $this->Client->Religion->find('list');
		$birthcountries = $this->Client->Birthcountry->find('list');
		$communicationchannels = $this->Client->Communicationchannel->find('list');
		$clientstatuses = $this->Client->Clientstatus->find('list');
		$families = $this->Client->Family->find('list');
		$events = $this->Client->Event->find('list');
		$this->set(compact('disabilities', 'prioritylevels', 'fundingsources', 'religions', 'birthcountries', 'communicationchannels', 'clientstatuses', 'families', 'events'));
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
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->Client->delete()) {
			$this->Session->setFlash(__('Client deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

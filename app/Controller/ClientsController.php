<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {
	
    
     var $name = 'Clients';
    var $components = array('Filter');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Client->recursive = 2;
                $filter = $this->Filter->process($this);
		//$this->set('events', $this->paginate(null, $this->data));
		if($this->request->is('post')){
			$this->set('clients', $this->paginate(null, array("Clients.first_name like '%".$this->data['clients']['first_name']."%'")));
		}
		else{
			$this->set('clients', $this->paginate(null));
		}
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
		if ($this->request->is('post')) {
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
		$this->set(compact('disabilities', 'prioritylevels', 'fundingsources', 'religions', 'birthcountries', 'communicationchannels', 'statuses', 'families', 'events'));
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
		$clientstatuses = $this->Client->Status->find('list');
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

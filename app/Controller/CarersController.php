<?php
App::uses('AppController', 'Controller');
/**
 * Carers Controller
 *
 * @property Carer $Carer
 */
class CarersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carer->recursive = 0;
		$this->set("carers", $this->paginate());
		
	}
	
	public function ajax_index() {
		$this->Carer->recursive = 0;
		$carers = $this->Carer->find("list");
		$this->set(compact('carers'));
		//$this->set("carers", $this->paginate());
		
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		$this->set('carer', $this->Carer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carer->create();
			if ($this->Carer->save($this->request->data)) {
				$this->Session->setFlash(__('The carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carer could not be saved. Please, try again.'));
			}
		}
		$incomesources = $this->Carer->Incomesource->find('list');
		$states = $this->Carer->State->find('list');
		$lgacouncils = $this->Carer->Lgacouncil->find('list');
		$languages = $this->Carer->Language->find('list');
		$this->set(compact('incomesources', 'states', 'lgacouncils', 'languages'));
	}
	
	public function ajax_add() {
		$incomesources = $this->Carer->Incomesource->find('list');
		$states = $this->Carer->User->State->find('list');
		$lgacouncils = $this->Carer->Lgacouncil->find('list');
		$languages = $this->Carer->Language->find('list');
		$communicationchannels = $this->Carer->User->Communicationchannel->find('list');
		$this->set(compact('incomesources', 'states', 'lgacouncils', 'languages','communicationchannels'));
		$this->render("ajax_add", "ajax");
		$this->autoRender = false;
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Carer->save($this->request->data)) {
				$this->Session->setFlash(__('The carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Carer->read(null, $id);
		}
		$incomesources = $this->Carer->Incomesource->find('list');
		$states = $this->Carer->State->find('list');
		$lgacouncils = $this->Carer->Lgacouncil->find('list');
		$languages = $this->Carer->Language->find('list');
		$this->set(compact('incomesources', 'states', 'lgacouncils', 'languages'));
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
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		if ($this->Carer->delete()) {
			$this->Session->setFlash(__('Carer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Carer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function search() {
		$this->Carer->recursive = 0;
		$carers = $this->Carer->User->find("list", array("conditions"=>array("CONCAT(first_name, ' ', last_name) LIKE '%" . $this->data['criteria'] . "%'")));
		$this->set(compact('carers'));
		if(count($carers) == 0)
		{
			echo "Carers were no found";
		}
		
		else
		{
			$this->render("search", "ajax");
		}
		$this->autoRender = false;
		//exit();
	}

}

<?php
App::uses('AppController', 'Controller');
/**
 * Clientstatuses Controller
 *
 * @property Clientstatus $Clientstatus
 */
class ClientstatusesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clientstatus->recursive = 0;
		$this->set('clientstatuses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Clientstatus->id = $id;
		if (!$this->Clientstatus->exists()) {
			throw new NotFoundException(__('Invalid clientstatus'));
		}
		$this->set('clientstatus', $this->Clientstatus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Clientstatus->create();
			if ($this->Clientstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The clientstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientstatus could not be saved. Please, try again.'));
			}
		}
		else if($this->request->isAjax())
		{
			$this->render('ajax_add', 'ajax');
			
		}*/
		if ($this->request->is('post')) {
			$this->Clientstatus->create();
			if ($this->Clientstatus->save($this->request->data)) {
				if($this->request->isAjax())
				{
					echo $this->Clientstatus->getLastInsertID();
					$this->autoRender = false;
				}		
				else
				{
					$this->Session->setFlash(__('The client status has been saved'));
					$this->redirect(array('action' => 'index'));
				}
			} else {
				if($this->request->isAjax())
				{
					echo 0;
					$this->autoRender(false);
					exit();
				}
				else	
					$this->Session->setFlash(__('The client status could not be saved. Please, try again.'));
			}
		}
		
		else if($this->request->isAjax())
		{
			$this->render('ajax_add', 'ajax');
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Clientstatus->id = $id;
		if (!$this->Clientstatus->exists()) {
			throw new NotFoundException(__('Invalid clientstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clientstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The clientstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientstatus could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Clientstatus->read(null, $id);
		}
		
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
		$this->Clientstatus->id = $id;
		if (!$this->Clientstatus->exists()) {
			throw new NotFoundException(__('Invalid clientstatus'));
		}
		if ($this->Clientstatus->delete()) {
			$this->Session->setFlash(__('Clientstatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clientstatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

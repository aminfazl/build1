<?php
App::uses('AppController', 'Controller');
/**
 * Communicationchannels Controller
 *
 * @property Communicationchannel $Communicationchannel
 */
class CommunicationchannelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Communicationchannel->recursive = 0;
		$this->set('communicationchannels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Communicationchannel->id = $id;
		if (!$this->Communicationchannel->exists()) {
			throw new NotFoundException(__('Invalid communicationchannel'));
		}
		$this->set('communicationchannel', $this->Communicationchannel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Communicationchannel->create();
			if ($this->Communicationchannel->save($this->request->data)) {
				$this->Session->setFlash(__('The communicationchannel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The communicationchannel could not be saved. Please, try again.'));
			}
		}*/
		if ($this->request->is('post')) {
			$this->Communicationchannel->create();
			if ($this->Communicationchannel->save($this->request->data)) {
				if($this->request->isAjax())
				{
					echo $this->Communicationchannel->getLastInsertID();
					$this->autoRender = false;
				}
				
				else
				{
					$this->Session->setFlash(__('The communication channel has been saved'));
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
					$this->Session->setFlash(__('The communication channel could not be saved. Please, try again.'));
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
		$this->Communicationchannel->id = $id;
		if (!$this->Communicationchannel->exists()) {
			throw new NotFoundException(__('Invalid communicationchannel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Communicationchannel->save($this->request->data)) {
				$this->Session->setFlash(__('The communicationchannel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The communicationchannel could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Communicationchannel->read(null, $id);
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
		$this->Communicationchannel->id = $id;
		if (!$this->Communicationchannel->exists()) {
			throw new NotFoundException(__('Invalid communicationchannel'));
		}
		if ($this->Communicationchannel->delete()) {
			$this->Session->setFlash(__('Communicationchannel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Communicationchannel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

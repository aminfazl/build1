<?php
App::uses('AppController', 'Controller');
/**
 * Volunteerstatuses Controller
 *
 * @property Volunteerstatus $Volunteerstatus
 */
class VolunteerstatusesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Volunteerstatus->recursive = 0;
		$this->set('volunteerstatuses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Volunteerstatus->id = $id;
		if (!$this->Volunteerstatus->exists()) {
			throw new NotFoundException(__('Invalid volunteerstatus'));
		}
		$this->set('volunteerstatus', $this->Volunteerstatus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Volunteerstatus->create();
			if ($this->Volunteerstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteerstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteerstatus could not be saved. Please, try again.'));
			}
		}*/
		
		if ($this->request->is('post')) {
			$this->Volunteerstatus->create();
			if ($this->Volunteerstatus->save($this->request->data)) {
				if($this->request->isAjax())
				{
					echo $this->Volunteerstatus->getLastInsertID();
					$this->autoRender = false;
				}
				
				else
				{
					$this->Session->setFlash(__('The volunteerstatus has been saved'));
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
					$this->Session->setFlash(__('The volunteerstatus could not be saved. Please, try again.'));
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
		$this->Volunteerstatus->id = $id;
		if (!$this->Volunteerstatus->exists()) {
			throw new NotFoundException(__('Invalid volunteerstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Volunteerstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteerstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteerstatus could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Volunteerstatus->read(null, $id);
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
		$this->Volunteerstatus->id = $id;
		if (!$this->Volunteerstatus->exists()) {
			throw new NotFoundException(__('Invalid volunteerstatus'));
		}
		if ($this->Volunteerstatus->delete()) {
			$this->Session->setFlash(__('Volunteerstatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Volunteerstatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Disabilities Controller
 *
 * @property Disability $Disability
 */
class DisabilitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Disability->recursive = 0;
		$this->set('disabilities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Disability->id = $id;
		if (!$this->Disability->exists()) {
			throw new NotFoundException(__('Invalid disability'));
		}
		$this->set('disability', $this->Disability->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Disability->create();
			if ($this->Disability->save($this->request->data)) {
				$this->Session->setFlash(__('The disability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disability could not be saved. Please, try again.'));
			}
		}*/
		if ($this->request->is('post')) {
			$this->Disability->create();
			if ($this->Disability->save($this->request->data)) {
				if($this->request->isAjax())
				{
					echo $this->Disability->getLastInsertID();
					$this->autoRender = false;
				}
				
				else
				{
					$this->Session->setFlash(__('The disability has been saved'));
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
					$this->Session->setFlash(__('The disability could not be saved. Please, try again.'));
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
		$this->Disability->id = $id;
		if (!$this->Disability->exists()) {
			throw new NotFoundException(__('Invalid disability'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disability->save($this->request->data)) {
				$this->Session->setFlash(__('The disability has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disability could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Disability->read(null, $id);
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
		$this->Disability->id = $id;
		if (!$this->Disability->exists()) {
			throw new NotFoundException(__('Invalid disability'));
		}
		if ($this->Disability->delete()) {
			$this->Session->setFlash(__('Disability deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disability was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

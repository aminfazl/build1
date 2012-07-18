<?php
App::uses('AppController', 'Controller');
/**
 * Prioritylevels Controller
 *
 * @property Prioritylevel $Prioritylevel
 */
class PrioritylevelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prioritylevel->recursive = 0;
		$this->set('prioritylevels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Prioritylevel->id = $id;
		if (!$this->Prioritylevel->exists()) {
			throw new NotFoundException(__('Invalid prioritylevel'));
		}
		$this->set('prioritylevel', $this->Prioritylevel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*if ($this->request->is('post')) {
			$this->Prioritylevel->create();
			if ($this->Prioritylevel->save($this->request->data)) {
				$this->Session->setFlash(__('The prioritylevel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prioritylevel could not be saved. Please, try again.'));
			}
		}*/
		if ($this->request->is('post')) {
			$this->Prioritylevel->create();
			if ($this->Prioritylevel->save($this->request->data)) {
				if($this->request->isAjax())
				{
					echo $this->Prioritylevel->getLastInsertID();
					$this->autoRender = false;
				}
				
				else
				{
					$this->Session->setFlash(__('The prioritylevel has been saved'));
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
					$this->Session->setFlash(__('The prioritylevel could not be saved. Please, try again.'));
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
		$this->Prioritylevel->id = $id;
		if (!$this->Prioritylevel->exists()) {
			throw new NotFoundException(__('Invalid prioritylevel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prioritylevel->save($this->request->data)) {
				$this->Session->setFlash(__('The prioritylevel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prioritylevel could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Prioritylevel->read(null, $id);
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
		$this->Prioritylevel->id = $id;
		if (!$this->Prioritylevel->exists()) {
			throw new NotFoundException(__('Invalid prioritylevel'));
		}
		if ($this->Prioritylevel->delete()) {
			$this->Session->setFlash(__('Prioritylevel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Prioritylevel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

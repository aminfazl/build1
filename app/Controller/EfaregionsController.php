<?php
App::uses('AppController', 'Controller');
/**
 * Efaregions Controller
 *
 * @property Efaregion $Efaregion
 */
class EfaregionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Efaregion->recursive = 0;
		$this->set('efaregions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Efaregion->id = $id;
		if (!$this->Efaregion->exists()) {
			throw new NotFoundException(__('Invalid efaregion'));
		}
		$this->set('efaregion', $this->Efaregion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Efaregion->create();
			if ($this->Efaregion->save($this->request->data)) {
				$this->Session->setFlash(__('The efaregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The efaregion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Efaregion->id = $id;
		if (!$this->Efaregion->exists()) {
			throw new NotFoundException(__('Invalid efaregion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Efaregion->save($this->request->data)) {
				$this->Session->setFlash(__('The efaregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The efaregion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Efaregion->read(null, $id);
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
		$this->Efaregion->id = $id;
		if (!$this->Efaregion->exists()) {
			throw new NotFoundException(__('Invalid efaregion'));
		}
		if ($this->Efaregion->delete()) {
			$this->Session->setFlash(__('Efaregion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Efaregion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

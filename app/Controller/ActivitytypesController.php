<?php
App::uses('AppController', 'Controller');
/**
 * Activitytypes Controller
 *
 * @property Activitytype $Activitytype
 */
class ActivitytypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Activitytype->recursive = 0;
		$this->set('activitytypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activitytype->id = $id;
		if (!$this->Activitytype->exists()) {
			throw new NotFoundException(__('Invalid activitytype'));
		}
		$this->set('activitytype', $this->Activitytype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activitytype->create();
			if ($this->Activitytype->save($this->request->data)) {
				$this->Session->setFlash(__('The activitytype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activitytype could not be saved. Please, try again.'));
			}
		}
		$activitytypes = $this->Activitytype->find('list');
		$this->set(compact('activitytypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activitytype->id = $id;
		if (!$this->Activitytype->exists()) {
			throw new NotFoundException(__('Invalid activitytype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activitytype->save($this->request->data)) {
				$this->Session->setFlash(__('The activitytype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activitytype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Activitytype->read(null, $id);
		}
		$activitytypes = $this->Activitytype->find('list');
		$this->set(compact('activitytypes'));
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
		$this->Activitytype->id = $id;
		if (!$this->Activitytype->exists()) {
			throw new NotFoundException(__('Invalid activitytype'));
		}
		if ($this->Activitytype->delete()) {
			$this->Session->setFlash(__('Activitytype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activitytype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

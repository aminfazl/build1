<?php
App::uses('AppController', 'Controller');
/**
 * VolfiltersInterests Controller
 *
 * @property VolfiltersInterest $VolfiltersInterest
 */
class VolfiltersInterestsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VolfiltersInterest->recursive = 0;
		$this->set('volfiltersInterests', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->VolfiltersInterest->id = $id;
		if (!$this->VolfiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid volfilters interest'));
		}
		$this->set('volfiltersInterest', $this->VolfiltersInterest->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VolfiltersInterest->create();
			if ($this->VolfiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The volfilters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volfilters interest could not be saved. Please, try again.'));
			}
		}
		$volfilters = $this->VolfiltersInterest->Volfilter->find('list');
		$interests = $this->VolfiltersInterest->Interest->find('list');
		$this->set(compact('volfilters', 'interests'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->VolfiltersInterest->id = $id;
		if (!$this->VolfiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid volfilters interest'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VolfiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The volfilters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volfilters interest could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->VolfiltersInterest->read(null, $id);
		}
		$volfilters = $this->VolfiltersInterest->Volfilter->find('list');
		$interests = $this->VolfiltersInterest->Interest->find('list');
		$this->set(compact('volfilters', 'interests'));
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
		$this->VolfiltersInterest->id = $id;
		if (!$this->VolfiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid volfilters interest'));
		}
		if ($this->VolfiltersInterest->delete()) {
			$this->Session->setFlash(__('Volfilters interest deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Volfilters interest was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

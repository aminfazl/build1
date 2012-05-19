<?php
App::uses('AppController', 'Controller');
/**
 * Volfilters Controller
 *
 * @property Volfilter $Volfilter
 */
class VolfiltersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Volfilter->recursive = 0;
		$this->set('volfilters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Volfilter->id = $id;
		if (!$this->Volfilter->exists()) {
			throw new NotFoundException(__('Invalid volfilter'));
		}
		$this->set('volfilter', $this->Volfilter->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Volfilter->create();
			if ($this->Volfilter->save($this->request->data)) {
				$this->Session->setFlash(__('The volfilter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volfilter could not be saved. Please, try again.'));
			}
		}
		$interests = $this->Volfilter->Interest->find('list');
		$this->set(compact('interests'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Volfilter->id = $id;
		if (!$this->Volfilter->exists()) {
			throw new NotFoundException(__('Invalid volfilter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Volfilter->save($this->request->data)) {
				$this->Session->setFlash(__('The volfilter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volfilter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Volfilter->read(null, $id);
		}
		$interests = $this->Volfilter->Interest->find('list');
		$this->set(compact('interests'));
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
		$this->Volfilter->id = $id;
		if (!$this->Volfilter->exists()) {
			throw new NotFoundException(__('Invalid volfilter'));
		}
		if ($this->Volfilter->delete()) {
			$this->Session->setFlash(__('Volfilter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Volfilter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Fundingsources Controller
 *
 * @property Fundingsource $Fundingsource
 */
class FundingsourcesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fundingsource->recursive = 0;
		$this->set('fundingsources', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fundingsource->id = $id;
		if (!$this->Fundingsource->exists()) {
			throw new NotFoundException(__('Invalid fundingsource'));
		}
		$this->set('fundingsource', $this->Fundingsource->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fundingsource->create();
			if ($this->Fundingsource->save($this->request->data)) {
				$this->Session->setFlash(__('The fundingsource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fundingsource could not be saved. Please, try again.'));
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
		$this->Fundingsource->id = $id;
		if (!$this->Fundingsource->exists()) {
			throw new NotFoundException(__('Invalid fundingsource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fundingsource->save($this->request->data)) {
				$this->Session->setFlash(__('The fundingsource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fundingsource could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Fundingsource->read(null, $id);
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
		$this->Fundingsource->id = $id;
		if (!$this->Fundingsource->exists()) {
			throw new NotFoundException(__('Invalid fundingsource'));
		}
		if ($this->Fundingsource->delete()) {
			$this->Session->setFlash(__('Fundingsource deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fundingsource was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

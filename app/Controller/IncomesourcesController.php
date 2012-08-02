<?php
App::uses('AppController', 'Controller');
/**
 * Incomesources Controller
 *
 * @property Incomesource $Incomesource
 */
class IncomesourcesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Incomesource->recursive = 0;
		$this->set('incomesources', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Incomesource->id = $id;
		if (!$this->Incomesource->exists()) {
			throw new NotFoundException(__('Invalid incomesource'));
		}
		$this->set('incomesource', $this->Incomesource->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Incomesource->create();
			if ($this->Incomesource->save($this->request->data)) {
				$this->Session->setFlash(__('The incomesource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incomesource could not be saved. Please, try again.'));
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
		$this->Incomesource->id = $id;
		if (!$this->Incomesource->exists()) {
			throw new NotFoundException(__('Invalid incomesource'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Incomesource->save($this->request->data)) {
				$this->Session->setFlash(__('The incomesource has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incomesource could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Incomesource->read(null, $id);
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
		$this->Incomesource->id = $id;
		if (!$this->Incomesource->exists()) {
			throw new NotFoundException(__('Invalid incomesource'));
		}
		if ($this->Incomesource->delete()) {
			$this->Session->setFlash(__('Incomesource deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Incomesource was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

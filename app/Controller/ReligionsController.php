<?php
App::uses('AppController', 'Controller');
/**
 * Religions Controller
 *
 * @property Religion $Religion
 */
class ReligionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Religion->recursive = 0;
		$this->set('religions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Religion->id = $id;
		if (!$this->Religion->exists()) {
			throw new NotFoundException(__('Invalid religion'));
		}
		$this->set('religion', $this->Religion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Religion->create();
			if ($this->Religion->save($this->request->data)) {
				$this->Session->setFlash(__('The religion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.'));
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
		$this->Religion->id = $id;
		if (!$this->Religion->exists()) {
			throw new NotFoundException(__('Invalid religion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Religion->save($this->request->data)) {
				$this->Session->setFlash(__('The religion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The religion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Religion->read(null, $id);
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
		$this->Religion->id = $id;
		if (!$this->Religion->exists()) {
			throw new NotFoundException(__('Invalid religion'));
		}
		if ($this->Religion->delete()) {
			$this->Session->setFlash(__('Religion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Religion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

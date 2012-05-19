<?php
App::uses('AppController', 'Controller');
/**
 * Dhsregions Controller
 *
 * @property Dhsregion $Dhsregion
 */
class DhsregionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dhsregion->recursive = 0;
		$this->set('dhsregions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Dhsregion->id = $id;
		if (!$this->Dhsregion->exists()) {
			throw new NotFoundException(__('Invalid dhsregion'));
		}
		$this->set('dhsregion', $this->Dhsregion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dhsregion->create();
			if ($this->Dhsregion->save($this->request->data)) {
				$this->Session->setFlash(__('The dhsregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dhsregion could not be saved. Please, try again.'));
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
		$this->Dhsregion->id = $id;
		if (!$this->Dhsregion->exists()) {
			throw new NotFoundException(__('Invalid dhsregion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dhsregion->save($this->request->data)) {
				$this->Session->setFlash(__('The dhsregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dhsregion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Dhsregion->read(null, $id);
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
		$this->Dhsregion->id = $id;
		if (!$this->Dhsregion->exists()) {
			throw new NotFoundException(__('Invalid dhsregion'));
		}
		if ($this->Dhsregion->delete()) {
			$this->Session->setFlash(__('Dhsregion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dhsregion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

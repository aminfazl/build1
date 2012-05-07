<?php
App::uses('AppController', 'Controller');
/**
 * FiltersInterests Controller
 *
 * @property FiltersInterest $FiltersInterest
 */
class FiltersInterestsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FiltersInterest->recursive = 0;
		$this->set('filtersInterests', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		$this->set('filtersInterest', $this->FiltersInterest->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FiltersInterest->create();
			if ($this->FiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The filters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filters interest could not be saved. Please, try again.'));
			}
		}
		$filters = $this->FiltersInterest->Filter->find('list');
		$interests = $this->FiltersInterest->Interest->find('list');
		$this->set(compact('filters', 'interests'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The filters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filters interest could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FiltersInterest->read(null, $id);
		}
		$filters = $this->FiltersInterest->Filter->find('list');
		$interests = $this->FiltersInterest->Interest->find('list');
		$this->set(compact('filters', 'interests'));
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
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		if ($this->FiltersInterest->delete()) {
			$this->Session->setFlash(__('Filters interest deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Filters interest was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FiltersInterest->recursive = 0;
		$this->set('filtersInterests', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		$this->set('filtersInterest', $this->FiltersInterest->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FiltersInterest->create();
			if ($this->FiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The filters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filters interest could not be saved. Please, try again.'));
			}
		}
		$filters = $this->FiltersInterest->Filter->find('list');
		$interests = $this->FiltersInterest->Interest->find('list');
		$this->set(compact('filters', 'interests'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FiltersInterest->save($this->request->data)) {
				$this->Session->setFlash(__('The filters interest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filters interest could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FiltersInterest->read(null, $id);
		}
		$filters = $this->FiltersInterest->Filter->find('list');
		$interests = $this->FiltersInterest->Interest->find('list');
		$this->set(compact('filters', 'interests'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->FiltersInterest->id = $id;
		if (!$this->FiltersInterest->exists()) {
			throw new NotFoundException(__('Invalid filters interest'));
		}
		if ($this->FiltersInterest->delete()) {
			$this->Session->setFlash(__('Filters interest deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Filters interest was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

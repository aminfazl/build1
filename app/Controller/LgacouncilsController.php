<?php
App::uses('AppController', 'Controller');
/**
 * Lgacouncils Controller
 *
 * @property Lgacouncil $Lgacouncil
 */
class LgacouncilsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lgacouncil->recursive = 0;
		$this->set('lgacouncils', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Lgacouncil->id = $id;
		if (!$this->Lgacouncil->exists()) {
			throw new NotFoundException(__('Invalid lgacouncil'));
		}
		$this->set('lgacouncil', $this->Lgacouncil->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lgacouncil->create();
			if ($this->Lgacouncil->save($this->request->data)) {
				$this->Session->setFlash(__('The lgacouncil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lgacouncil could not be saved. Please, try again.'));
			}
		}
		$efaregions = $this->Lgacouncil->Efaregion->find('list');
		$dhsregions = $this->Lgacouncil->Dhsregion->find('list');
		$this->set(compact('efaregions', 'dhsregions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Lgacouncil->id = $id;
		if (!$this->Lgacouncil->exists()) {
			throw new NotFoundException(__('Invalid lgacouncil'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lgacouncil->save($this->request->data)) {
				$this->Session->setFlash(__('The lgacouncil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lgacouncil could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Lgacouncil->read(null, $id);
		}
		$efaregions = $this->Lgacouncil->Efaregion->find('list');
		$dhsregions = $this->Lgacouncil->Dhsregion->find('list');
		$this->set(compact('efaregions', 'dhsregions'));
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
		$this->Lgacouncil->id = $id;
		if (!$this->Lgacouncil->exists()) {
			throw new NotFoundException(__('Invalid lgacouncil'));
		}
		if ($this->Lgacouncil->delete()) {
			$this->Session->setFlash(__('Lgacouncil deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lgacouncil was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

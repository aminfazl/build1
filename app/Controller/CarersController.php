<?php
App::uses('AppController', 'Controller');
/**
 * Carers Controller
 *
 * @property Carer $Carer
 */
class CarersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carer->recursive = 0;
		$this->set('carers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		$this->set('carer', $this->Carer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carer->create();
			if ($this->Carer->save($this->request->data)) {
				$this->Session->setFlash(__('The carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carer could not be saved. Please, try again.'));
			}
		}
		$incomesources = $this->Carer->Incomesource->find('list');
		$states = $this->Carer->State->find('list');
		$lgacouncils = $this->Carer->Lgacouncil->find('list');
		$languages = $this->Carer->Language->find('list');
		$this->set(compact('incomesources', 'states', 'lgacouncils', 'languages'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Carer->save($this->request->data)) {
				$this->Session->setFlash(__('The carer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Carer->read(null, $id);
		}
		$incomesources = $this->Carer->Incomesource->find('list');
		$states = $this->Carer->State->find('list');
		$lgacouncils = $this->Carer->Lgacouncil->find('list');
		$languages = $this->Carer->Language->find('list');
		$this->set(compact('incomesources', 'states', 'lgacouncils', 'languages'));
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
		$this->Carer->id = $id;
		if (!$this->Carer->exists()) {
			throw new NotFoundException(__('Invalid carer'));
		}
		if ($this->Carer->delete()) {
			$this->Session->setFlash(__('Carer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Carer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

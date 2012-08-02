<?php
App::uses('AppController', 'Controller');
/**
 * Timesheets Controller
 *
 * @property Timesheet $Timesheet
 */
class TimesheetsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Timesheet->recursive = 2;
		$this->set('timesheets', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		$this->set('timesheet', $this->Timesheet->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Timesheet->create();
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		}
		$activitytypes = $this->Timesheet->Activitytype->find('list');
		$clients = $this->Timesheet->Client->find('list');
		$volunteers = $this->Timesheet->Volunteer->find('list');
		$events = $this->Timesheet->Event->find('list');
		$this->set(compact('activitytypes', 'clients', 'volunteers', 'events'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Timesheet->save($this->request->data)) {
				$this->Session->setFlash(__('The timesheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timesheet could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Timesheet->read(null, $id);
		}
		$activitytypes = $this->Timesheet->Activitytype->find('list');
		$clients = $this->Timesheet->Client->find('list');
		$volunteers = $this->Timesheet->Volunteer->find('list');
		$events = $this->Timesheet->Event->find('list');
		$this->set(compact('activitytypes', 'clients', 'volunteers', 'events'));
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
		$this->Timesheet->id = $id;
		if (!$this->Timesheet->exists()) {
			throw new NotFoundException(__('Invalid timesheet'));
		}
		if ($this->Timesheet->delete()) {
			$this->Session->setFlash(__('Timesheet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Timesheet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function payroll(){
		$this->loadModel('Volunteer');
		$this->set('volunteers', $this->paginate());
		if($this->request->is('post')){
			$this->Timesheet->recursive=2;
			//$cond=array("timesheet.workdate>=".$this->data["Timesheet"]["start_date"].", 'YYYYMMDD') and timesheet.workdate<=to_char(".$this->data["Timesheet"]["end_date"].", 'YYYYMMDD')");
			$cond=array("Timesheet.workdate>=".$this->data["Timesheet"]["start_date"]." and Timesheet.workdate<=".$this->data["Timesheet"]["end_date"]." order by Timesheet.volunteer_id");
			$this->set('records', $this->paginate('Timesheet', $cond));

			$cond2=array("Payrate.fromdate<=".$this->data["Timesheet"]["start_date"]." and Payrate.todate>=".$this->data["Timesheet"]["end_date"]);
			$this->set('rates', $this->paginate('Payrate', $cond2));

			foreach($records as $record){
				$id=$record['volunteer_id'];
				$payrolls[($record['volunteer_id'])]['First_Name']=$record['Volunteer']['User']['first_name'];
				$payrolls[($record['volunteer_id'])]['Last_Name']=$record['Volunteer']['User']['first_name'];
				$payrolls[$id]['Visits']++;
				$hours=CakeTime::format('H',($record['totime']-$record['fromtime']));
				$payrolls[$id]['Hours']+=$hours;
				if($rates[0]['maxhours']<$hours){
					$payrolls[$id]['Amount']+=$rates[0]['longrate'];
				}
				else{
					$payrolls[$id]['Amount']+=$rates[0]['shortrate'];
				}
			}

			for($i=0; $i<count($payrolls); $i++){
				if($payrolls[$i]['Amount']>$rates[0]['maxweeklyrate']){
					$payrolls[$i]['Amount']=$rates[0]['maxweeklyrate'];
				}
			}
		}
	}
}

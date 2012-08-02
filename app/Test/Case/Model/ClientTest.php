<?php
App::uses('Client', 'Model');

/**
 * Client Test Case
 *
 */
class ClientTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client', 'app.disability', 'app.prioritylevel', 'app.fundingsource', 'app.religion', 'app.birthcountry', 'app.communicationchannel', 'app.status', 'app.family', 'app.interestslog', 'app.interest', 'app.filter', 'app.filters_interest', 'app.timesheet', 'app.event', 'app.events_client');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Client = ClassRegistry::init('Client');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Client);

		parent::tearDown();
	}

}

<?php
App::uses('ClientsRelative', 'Model');

/**
 * ClientsRelative Test Case
 *
 */
class ClientsRelativeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clients_relative', 'app.relativetype', 'app.person', 'app.client', 'app.status', 'app.user', 'app.communicationchannel', 'app.matchlog', 'app.timesheet', 'app.relative');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientsRelative = ClassRegistry::init('ClientsRelative');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientsRelative);

		parent::tearDown();
	}

}

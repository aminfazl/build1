<?php
App::uses('Clientstatus', 'Model');

/**
 * Clientstatus Test Case
 *
 */
class ClientstatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clientstatus');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clientstatus = ClassRegistry::init('Clientstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clientstatus);

		parent::tearDown();
	}

}

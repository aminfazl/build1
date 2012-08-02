<?php
App::uses('Matching', 'Model');

/**
 * Matching Test Case
 *
 */
class MatchingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.matching', 'app.volunteer', 'app.volunteerstatus', 'app.communicationchannel', 'app.client', 'app.disability', 'app.prioritylevel', 'app.fundingsource', 'app.religion', 'app.country', 'app.clientstatus', 'app.family', 'app.carer', 'app.incomesource', 'app.state', 'app.household', 'app.lgacouncil', 'app.efaregion', 'app.dhsregion', 'app.language', 'app.sibling', 'app.interestslog', 'app.interest', 'app.filter', 'app.filters_interest', 'app.timesheet', 'app.activitytype', 'app.event', 'app.eventtype', 'app.eventvenue', 'app.events_client', 'app.timesheets_event', 'app.volinterestslog');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Matching = ClassRegistry::init('Matching');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Matching);

		parent::tearDown();
	}

}

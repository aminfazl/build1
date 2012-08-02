<?php
/**
 * MatchingFixture
 *
 */
class MatchingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'fromdate' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'todate' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'volunteers_matching_fk' => array('column' => 'volunteer_id', 'unique' => 0), 'clients_matching_fk' => array('column' => 'client_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'volunteer_id' => 1,
			'client_id' => 1,
			'fromdate' => '2012-07-17',
			'todate' => '2012-07-17'
		),
	);
}

<?php
/**
 * ClientsRelativeFixture
 *
 */
class ClientsRelativeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'relativetype_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'relativetype_id' => 1,
			'person_id' => 1,
			'client_id' => 1
		),
	);
}

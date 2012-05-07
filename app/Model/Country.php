<?php
App::uses('AppModel', 'Model');
/**
 * Country Model
 *
 * @property client $client
 */
class Country extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'countryname';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'countryname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Country name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'client' => array(
			'className' => 'client',
			'foreignKey' => 'birthcountry_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

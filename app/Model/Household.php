<?php
App::uses('AppModel', 'Model');
/**
 * Household Model
 *
 * @property State $State
 * @property Carer $Carer
 * @property Client $Client
 * @property Sibling $Sibling
 */
class Household extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'street_address';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'state_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select a state',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'suburb' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Suburb is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'street_address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Street Address is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Carer' => array(
			'className' => 'Carer',
			'foreignKey' => 'household_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'household_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Sibling' => array(
			'className' => 'Sibling',
			'foreignKey' => 'household_id',
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

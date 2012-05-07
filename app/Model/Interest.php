<?php
App::uses('AppModel', 'Model');
/**
 * Interest Model
 *
 * @property Interestslog $Interestslog
 * @property Filter $Filter
 */
class Interest extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'interest_name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'interest_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Interest name is required',
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
		'Interestslog' => array(
			'className' => 'Interestslog',
			'foreignKey' => 'interest_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Filter' => array(
			'className' => 'Filter',
			'joinTable' => 'filters_interests',
			'foreignKey' => 'interest_id',
			'associationForeignKey' => 'filter_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}

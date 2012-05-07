<?php
App::uses('AppModel', 'Model');
/**
 * Filter Model
 *
 * @property Interest $Interest
 */
class Filter extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'filter_name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'filter_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Filter name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'minage' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please enter a number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'maxage' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please enter a number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Interest' => array(
			'className' => 'Interest',
			'joinTable' => 'filters_interests',
			'foreignKey' => 'filter_id',
			'associationForeignKey' => 'interest_id',
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

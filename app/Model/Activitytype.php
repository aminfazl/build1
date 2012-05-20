<?php
App::uses('AppModel', 'Model');
/**
 * Activitytype Model
 *
 * @property Timesheet $Timesheet
 */
class Activitytype extends AppModel {


public $displayField= 'activitytype_name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'activitytype_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Type name is required',
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
		'Timesheet' => array(
			'className' => 'Timesheet',
			'foreignKey' => 'activitytype_id',
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

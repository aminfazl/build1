<?php
App::uses('AppModel', 'Model');
/**
 * Volunteerstatus Model
 *
 * @property Volunteer $Volunteer
 */
class Volunteerstatus extends AppModel {

public $displayField = 'volunteerstatus_name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'volunteerstatus_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Status name is required',
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
		'Volunteer' => array(
			'className' => 'Volunteer',
			'foreignKey' => 'volunteerstatus_id',
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

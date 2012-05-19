<?php
App::uses('AppModel', 'Model');
/**
 * Efaregion Model
 *
 * @property Lgacouncil $Lgacouncil
 */
class Efaregion extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'efaregion_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
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
		'Lgacouncil' => array(
			'className' => 'Lgacouncil',
			'foreignKey' => 'efaregion_id',
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

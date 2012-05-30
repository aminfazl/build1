<?php
App::uses('AppModel', 'Model');
/**
 * Lgacouncil Model
 *
 * @property Efaregion $Efaregion
 * @property Dhsregion $Dhsregion
 * @property Carer $Carer
 */
class Lgacouncil extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
 
 var $displayField = 'lgacouncil_name';

	public $validate = array(
		'lgacouncil_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'efaregion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dhsregion_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Efaregion' => array(
			'className' => 'Efaregion',
			'foreignKey' => 'efaregion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dhsregion' => array(
			'className' => 'Dhsregion',
			'foreignKey' => 'dhsregion_id',
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
			'foreignKey' => 'lgacouncil_id',
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

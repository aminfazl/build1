<?php
App::uses('AppModel', 'Model');
/**
 * Contacttype Model
 *
 * @property Contact $Contact
 */
class Contacttype extends AppModel {
	
	public $displayField = 'contacttype_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'contacttype_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Contact type name is required',
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
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'contacttype_id',
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

<?php
App::uses('AppModel', 'Model');
/**
 * Communicationchannel Model
 *
 * @property Client $Client
 */
class Communicationchannel extends AppModel {
	
public $displayField = 'communicationchannel_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'communicationchannel_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Communication Channel is required',
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
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'communicationchannel_id',
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

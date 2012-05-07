<?php
App::uses('AppModel', 'Model');
/**
 * ClientsSibling Model
 *
 * @property Client $Client
 * @property Sibling $Sibling
 */
class ClientsSibling extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sibling_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'client_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select the child',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sibling_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select the sibling',
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
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sibling' => array(
			'className' => 'Sibling',
			'foreignKey' => 'sibling_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

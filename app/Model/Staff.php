<?php
App::uses('AppModel', 'Model');
/**
 * Staff Model
 *
 * @property User $User
 * @property Contact $Contact
 */
class Staff extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'staff';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';
	
	
	/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Username is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'letters' =>array(
					'rule' => '/^[a-zA-Z ]+$/', 
					'message' => 'Only letter is allowed'
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Password is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'letters' =>array(
					'rule' => '/^[a-zA-Z ]+$/', 
					'message' => 'Only letter is allowed'
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'staff_id',
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

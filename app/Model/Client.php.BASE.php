<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property Clientstatus $Clientstatus
 * @property Communicationchannel $Communicationchannel
 * @property Household $Household
 * @property country $country
 * @property Interestslog $Interestslog
 * @property Carer $Carer
 * @property Sibling $Sibling
 */
class Client extends AppModel {
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
		'clientstatus_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select status',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'communicationchannel_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select prefered Communication Channel',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'First Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Gender is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Last Name is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birth_date' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Please select a valid date',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Date of Birth is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'household_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select the household',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birthcountry_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select the country of birth',
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
		'Clientstatus' => array(
			'className' => 'Clientstatus',
			'foreignKey' => 'clientstatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Communicationchannel' => array(
			'className' => 'Communicationchannel',
			'foreignKey' => 'communicationchannel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Household' => array(
			'className' => 'Household',
			'foreignKey' => 'household_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'birthcountry_id',
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
		'Interestslog' => array(
			'className' => 'Interestslog',
			'foreignKey' => 'client_id',
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
		'Carer' => array(
			'className' => 'Carer',
			'joinTable' => 'clients_carers',
			'foreignKey' => 'client_id',
			'associationForeignKey' => 'carer_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Sibling' => array(
			'className' => 'Sibling',
			'joinTable' => 'clients_siblings',
			'foreignKey' => 'client_id',
			'associationForeignKey' => 'sibling_id',
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

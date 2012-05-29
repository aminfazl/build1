<?php
App::uses('AppModel', 'Model');
/**
 * Family Model
 *
 * @property Client $Client
 * @property Sibling $Sibling
 */
class Family extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

		'primarycarer_id' => array(

		'primarycarer_ID' => array(

			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	));

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'family_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Sibling' => array(
			'className' => 'Sibling',
			'foreignKey' => 'family_id',
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Primarycarer' => array(
			'className' => 'Carer',
			'foreignKey' => 'primarycarer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Secondarycarer' => array(
			'className' => 'Carer',
			'foreignKey' => 'secondarycarer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);



}

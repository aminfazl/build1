<?php
App::uses('AppModel', 'Model');
/**
 * VolfiltersInterest Model
 *
 * @property Volfilter $Volfilter
 * @property Interest $Interest
 */
class VolfiltersInterest extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'volfilter_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'interest_id' => array(
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
		'Volfilter' => array(
			'className' => 'Volfilter',
			'foreignKey' => 'volfilter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Interest' => array(
			'className' => 'Interest',
			'foreignKey' => 'interest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

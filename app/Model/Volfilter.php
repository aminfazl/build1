<?php
App::uses('AppModel', 'Model');
/**
 * Volfilter Model
 *
 * @property Interest $Interest
 */
class Volfilter extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'volfilter_name' => array(
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Interest' => array(
			'className' => 'Interest',
			'joinTable' => 'volfilters_interests',
			'foreignKey' => 'volfilter_id',
			'associationForeignKey' => 'interest_id',
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

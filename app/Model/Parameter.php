<?php
App::uses('AppModel', 'Model');
/**
 * Parameter Model
 *
 * @property Modele $Modele
 */
class Parameter extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'per';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'per' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Modele' => array(
			'className' => 'Modele',
			'foreignKey' => 'parameter_id',
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

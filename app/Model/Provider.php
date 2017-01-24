<?php
App::uses('AppModel', 'Model');
/**
 * Provider Model
 *
 * @property Component $Component
 */
class Provider extends AppModel {

	public $useTable = "actors";
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Composant' => array(
			'className' => 'Composant',
			'foreignKey' => 'provider_id',
			'dependent' => true,
			'conditions' => array('type'=>"P"),
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

<?php
App::uses('AppModel', 'Model');
/**
 * Tax Model
 *
 * @property Component $Component
 */
class Tax extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'value';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Composant' => array(
			'className' => 'Composant',
			'foreignKey' => 'tax_id',
			'dependent' => false
		),
		'Modele' => array(
			'className' => 'Modele',
			'foreignKey' => 'tax_id',
			'dependent' => false
		)
	);

}

<?php
App::uses('AppModel', 'Model');
/**
 * Composant Model
 *
 * @property Family $Family
 * @property Tax $Tax
 * @property Provider $Provider
 */
class Composant extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Family',
		'Tax',
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'provider_id',
			'conditions' => array('Provider.type'=>'P')
		),
		'Unit'
	);
}

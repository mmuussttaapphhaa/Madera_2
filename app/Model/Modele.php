<?php
App::uses('AppModel', 'Model');
/**
 * Modele Model
 *
 * @property Parameter $Parameter
 * @property Gamme $Gamme
 * @property Crosssection $Crosssection
 * @property Fundation $Fundation
 */
class Modele extends AppModel {

	public $actsAs = array(
        'Upload.Upload' => array(
            'fields' => array(
                'img' => '/files/modeles/:y/:md5'
            ),
            'resize'=>array(
                'ok'=>false
            )
        )
    );

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'img' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parameter_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gamme_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'crosssection_id' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fundation_id' => array(
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
		'Parameter' => array(
			'className' => 'Parameter',
			'foreignKey' => 'parameter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tax' => array(
			'className' => 'Tax',
			'foreignKey' => 'tax_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gamme' => array(
			'className' => 'Gamme',
			'foreignKey' => 'gamme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Crosssection' => array(
			'className' => 'Crosssection',
			'foreignKey' => 'crosssection_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fundation' => array(
			'className' => 'Fundation',
			'foreignKey' => 'fundation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Composant' => array(
			'className' => 'Composant',
			'joinTable' => 'composants_modeles',
			'foreignKey' => 'modele_id',
			'associationForeignKey' => 'composant_id'
		)
	);
}

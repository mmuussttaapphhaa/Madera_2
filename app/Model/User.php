<?php
class User extends AppModel{

    public $displayField = 'lastname';

    public $validate = array(
        'username' => array(
            'alpha' => array(
                'rule' => '/^[a-z0-9A-Z]*$/',
                'message' => 'Votre nom d\'utilisateur n\'est pas valide'
            ),
            'uniq' => array(
                'rule' => 'isUnique',
                'message' => "Ce pseudo est déjà utilisé"
            ),
            'noEmpty'=>array(
                'rule' => 'notBlank',
                'message' => 'Le login est obligatoire'
                ),
        ),
        'mail' => array(
            'mail' => array(
                'rule' => 'email',
                 'message' => "Ce mail n'est pas valide"
            ),
            'uniq' => array(
                'rule' => 'isUnique',
                'message' => "Ce mail est déjà utilisé"
            )
        ),
        'password' => array(
             'noEmpty'=>array(
                'rule' => 'notBlank',
                'message' => 'Le mot de passe est obligatoire'
                ),
        ),
        'password2' => array(
           'identic' => array(
                'rule' => 'identicalFields',
                'message' => 'Les mots de passe ne correspondent pas'
                )
        )
    );

    public function identicalFields($check, $limit){
        $field = key($check);
        if(!empty($this->data[$this->alias]['password']))
            return $check[$field] == $this->data[$this->alias]['password'];
        else
            return true;
    }

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
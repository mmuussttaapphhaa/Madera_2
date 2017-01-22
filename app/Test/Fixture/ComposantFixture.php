<?php
/**
 * ComposantFixture
 *
 */
class ComposantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'characteristics' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'stock' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'family_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tax_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'provider_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'characteristics' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'stock' => 1,
			'family_id' => 1,
			'tax_id' => 1,
			'provider_id' => 1
		),
	);

}

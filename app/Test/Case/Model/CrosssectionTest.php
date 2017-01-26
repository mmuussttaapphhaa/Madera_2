<?php
App::uses('Crosssection', 'Model');

/**
 * Crosssection Test Case
 *
 */
class CrosssectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.crosssection',
		'app.modele',
		'app.parameter',
		'app.gamme',
		'app.fundation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Crosssection = ClassRegistry::init('Crosssection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Crosssection);

		parent::tearDown();
	}

}

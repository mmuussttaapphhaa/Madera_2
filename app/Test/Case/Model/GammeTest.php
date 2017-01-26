<?php
App::uses('Gamme', 'Model');

/**
 * Gamme Test Case
 *
 */
class GammeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gamme',
		'app.modele',
		'app.parameter',
		'app.crosssection',
		'app.fundation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gamme = ClassRegistry::init('Gamme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gamme);

		parent::tearDown();
	}

}

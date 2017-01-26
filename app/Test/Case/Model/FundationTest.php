<?php
App::uses('Fundation', 'Model');

/**
 * Fundation Test Case
 *
 */
class FundationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fundation',
		'app.modele',
		'app.parameter',
		'app.gamme',
		'app.crosssection'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fundation = ClassRegistry::init('Fundation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fundation);

		parent::tearDown();
	}

}

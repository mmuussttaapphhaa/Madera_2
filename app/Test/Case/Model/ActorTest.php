<?php
App::uses('Actor', 'Model');

/**
 * Actor Test Case
 *
 */
class ActorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actor = ClassRegistry::init('Actor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actor);

		parent::tearDown();
	}

}

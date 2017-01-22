<?php
App::uses('Component', 'Model');

/**
 * Component Test Case
 *
 */
class ComponentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.component',
		'app.family',
		'app.tax',
		'app.provider'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Component = ClassRegistry::init('Component');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Component);

		parent::tearDown();
	}

}

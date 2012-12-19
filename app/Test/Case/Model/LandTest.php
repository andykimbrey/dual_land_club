<?php
App::uses('Land', 'Model');

/**
 * Land Test Case
 *
 */
class LandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.land',
		'app.ownership',
		'app.member',
		'app.colour',
		'app.land_colour',
		'app.set',
		'app.land_set'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Land = ClassRegistry::init('Land');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Land);

		parent::tearDown();
	}

}

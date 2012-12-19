<?php
App::uses('LandSet', 'Model');

/**
 * LandSet Test Case
 *
 */
class LandSetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.land_set',
		'app.set',
		'app.sets_lands_are_in',
		'app.land',
		'app.ownership',
		'app.member',
		'app.colour',
		'app.land_colour'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LandSet = ClassRegistry::init('LandSet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LandSet);

		parent::tearDown();
	}

}

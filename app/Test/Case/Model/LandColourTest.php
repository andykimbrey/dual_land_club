<?php
App::uses('LandColour', 'Model');

/**
 * LandColour Test Case
 *
 */
class LandColourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.land_colour',
		'app.colour',
		'app.land',
		'app.ownership',
		'app.member',
		'app.set',
		'app.sets_lands_are_in',
		'app.land_set'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LandColour = ClassRegistry::init('LandColour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LandColour);

		parent::tearDown();
	}

}

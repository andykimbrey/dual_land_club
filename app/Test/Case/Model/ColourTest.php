<?php
App::uses('Colour', 'Model');

/**
 * Colour Test Case
 *
 */
class ColourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.colour',
		'app.land',
		'app.ownership',
		'app.member',
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
		$this->Colour = ClassRegistry::init('Colour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Colour);

		parent::tearDown();
	}

}

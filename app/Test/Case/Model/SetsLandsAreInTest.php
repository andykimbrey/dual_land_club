<?php
App::uses('SetsLandsAreIn', 'Model');

/**
 * SetsLandsAreIn Test Case
 *
 */
class SetsLandsAreInTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sets_lands_are_in',
		'app.set',
		'app.land',
		'app.ownership',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SetsLandsAreIn = ClassRegistry::init('SetsLandsAreIn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SetsLandsAreIn);

		parent::tearDown();
	}

}

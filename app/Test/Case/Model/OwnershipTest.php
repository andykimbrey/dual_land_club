<?php
App::uses('Ownership', 'Model');

/**
 * Ownership Test Case
 *
 */
class OwnershipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ownership',
		'app.member',
		'app.land',
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
		$this->Ownership = ClassRegistry::init('Ownership');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ownership);

		parent::tearDown();
	}

}

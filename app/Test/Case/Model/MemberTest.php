<?php
App::uses('Member', 'Model');

/**
 * Member Test Case
 *
 */
class MemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.member',
		'app.ownership',
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
		$this->Member = ClassRegistry::init('Member');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Member);

		parent::tearDown();
	}

}

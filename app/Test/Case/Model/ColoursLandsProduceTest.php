<?php
App::uses('ColoursLandsProduce', 'Model');

/**
 * ColoursLandsProduce Test Case
 *
 */
class ColoursLandsProduceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.colours_lands_produce',
		'app.colour',
		'app.lands_produce',
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
		$this->ColoursLandsProduce = ClassRegistry::init('ColoursLandsProduce');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColoursLandsProduce);

		parent::tearDown();
	}

}

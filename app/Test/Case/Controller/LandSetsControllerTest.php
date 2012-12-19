<?php
App::uses('LandSetsController', 'Controller');

/**
 * LandSetsController Test Case
 *
 */
class LandSetsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.land_set',
		'app.set',
		'app.land',
		'app.ownership',
		'app.member',
		'app.colour',
		'app.land_colour'
	);

}

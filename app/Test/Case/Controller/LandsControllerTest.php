<?php
App::uses('LandsController', 'Controller');

/**
 * LandsController Test Case
 *
 */
class LandsControllerTest extends ControllerTestCase {

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

}

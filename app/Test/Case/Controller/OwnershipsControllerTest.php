<?php
App::uses('OwnershipsController', 'Controller');

/**
 * OwnershipsController Test Case
 *
 */
class OwnershipsControllerTest extends ControllerTestCase {

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

}

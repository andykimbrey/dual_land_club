<?php
App::uses('MembersController', 'Controller');

/**
 * MembersController Test Case
 *
 */
class MembersControllerTest extends ControllerTestCase {

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

}

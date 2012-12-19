<?php
/**
 * LandSetFixture
 *
 */
class LandSetFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'land_set';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Primary Key'),
		'set_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Sets'),
		'land_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Lands'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_sets-sets_lands_are_in' => array('column' => 'set_id', 'unique' => 0),
			'FK_lands-sets_lands_are_in' => array('column' => 'land_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'set_id' => 1,
			'land_id' => 1
		),
	);

}

<?php
/**
 * LandColourFixture
 *
 */
class LandColourFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'land_colour';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Primary Key'),
		'colour_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Colours'),
		'land_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Lands'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_colours-colours_lands_produce' => array('column' => 'colour_id', 'unique' => 0),
			'FK_lands-colours_lands_produce' => array('column' => 'land_id', 'unique' => 0)
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
			'colour_id' => 1,
			'land_id' => 1
		),
	);

}

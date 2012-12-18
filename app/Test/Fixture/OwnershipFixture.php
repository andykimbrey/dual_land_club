<?php
/**
 * OwnershipFixture
 *
 */
class OwnershipFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Primary Key'),
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Members'),
		'land_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Foreign Key in Lands'),
		'number_undecked' => array('type' => 'integer', 'null' => true, 'default' => null),
		'number_decked' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_member_ownerships' => array('column' => 'member_id', 'unique' => 0),
			'FK_land_ownerships' => array('column' => 'land_id', 'unique' => 0)
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
			'member_id' => 1,
			'land_id' => 1,
			'number_undecked' => 1,
			'number_decked' => 1
		),
	);

}

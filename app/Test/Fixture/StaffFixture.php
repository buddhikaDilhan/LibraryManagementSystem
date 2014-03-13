<?php
/**
 * StaffFixture
 *
 */
class StaffFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'staff_index' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'year_of_appoinment' => array('type' => 'date', 'null' => true, 'default' => null),
		'position' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'staff_index', 'unique' => 1)
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
			'staff_index' => 1,
			'year_of_appoinment' => '2014-03-13',
			'position' => 'Lorem ipsum dolor '
		),
	);

}

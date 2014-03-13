<?php
/**
 * StudentFixture
 *
 */
class StudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'student_index' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'batch' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'total_fine' => array('type' => 'integer', 'null' => true, 'default' => null),
		'registered_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'student_index', 'unique' => 1)
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
			'student_index' => 1,
			'batch' => 'Lor',
			'total_fine' => 1,
			'registered_date' => '2014-03-13'
		),
	);

}

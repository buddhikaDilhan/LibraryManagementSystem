<?php
/**
 * BorrowFixture
 *
 */
class BorrowFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'member_index' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'item_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'borrowed_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'fine' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '7,2'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'member_index' => array('column' => 'member_index', 'unique' => 0),
			'item_id' => array('column' => 'item_id', 'unique' => 0)
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
			'member_index' => 1,
			'item_id' => 1,
			'borrowed_date' => '2014-03-13',
			'fine' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet'
		),
	);

}

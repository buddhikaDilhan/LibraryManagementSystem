<?php
/**
 * BookFixture
 *
 */
class BookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ISBN' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'item_id', 'unique' => 1),
			'ISBN' => array('column' => 'ISBN', 'unique' => 0)
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
			'item_id' => 1,
			'ISBN' => 1
		),
	);

}

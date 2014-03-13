<?php
/**
 * AuthorFixture
 *
 */
class AuthorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ISBN' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'author_name_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'author_name_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'author_name_3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'author_name_4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ISBN', 'unique' => 1)
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
			'ISBN' => 1,
			'author_name_1' => 'Lorem ipsum dolor ',
			'author_name_2' => 'Lorem ipsum dolor ',
			'author_name_3' => 'Lorem ipsum dolor ',
			'author_name_4' => 'Lorem ipsum dolor '
		),
	);

}

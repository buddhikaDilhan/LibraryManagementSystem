<?php
App::uses('ItemIsAt', 'Model');

/**
 * ItemIsAt Test Case
 *
 */
class ItemIsAtTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_is_at',
		'app.item',
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemIsAt = ClassRegistry::init('ItemIsAt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemIsAt);

		parent::tearDown();
	}

}

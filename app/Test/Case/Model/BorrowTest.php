<?php
App::uses('Borrow', 'Model');

/**
 * Borrow Test Case
 *
 */
class BorrowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.borrow',
		'app.item',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Borrow = ClassRegistry::init('Borrow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Borrow);

		parent::tearDown();
	}

}

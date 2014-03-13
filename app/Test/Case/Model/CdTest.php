<?php
App::uses('Cd', 'Model');

/**
 * Cd Test Case
 *
 */
class CdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cd',
		'app.cd_details',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cd = ClassRegistry::init('Cd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cd);

		parent::tearDown();
	}

}

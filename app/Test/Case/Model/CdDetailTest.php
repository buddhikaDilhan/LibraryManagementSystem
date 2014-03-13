<?php
App::uses('CdDetail', 'Model');

/**
 * CdDetail Test Case
 *
 */
class CdDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cd_detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CdDetail = ClassRegistry::init('CdDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CdDetail);

		parent::tearDown();
	}

}

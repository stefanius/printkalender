<?php
App::uses('WikiListitem', 'Model');

/**
 * WikiListitem Test Case
 *
 */
class WikiListitemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wiki_listitem',
		'app.link'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WikiListitem = ClassRegistry::init('WikiListitem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WikiListitem);

		parent::tearDown();
	}

}

<?php
App::uses('Snippet', 'Model');

/**
 * Snippet Test Case
 *
 */
class SnippetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.snippet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Snippet = ClassRegistry::init('Snippet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Snippet);

		parent::tearDown();
	}

}

<?php 
/* SVN FILE: $Id$ */
/* ContentsController Test cases generated on: 2009-07-24 19:07:05 : 1248430565*/
App::import('Controller', 'Contents');

class TestContents extends ContentsController {
	public $autoRender = false;
}

class ContentsControllerTest extends CakeTestCase {
	public $Contents = null;

	public function startTest() {
		$this->Contents = new TestContents();
		$this->Contents->constructClasses();
	}

	public function testContentsControllerInstance() {
		$this->assertTrue(is_a($this->Contents, 'ContentsController'));
	}

	public function endTest() {
		unset($this->Contents);
	}
}
?>
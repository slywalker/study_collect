<?php 
/* SVN FILE: $Id$ */
/* TagsController Test cases generated on: 2009-07-24 19:07:10 : 1248430570*/
App::import('Controller', 'Tags');

class TestTags extends TagsController {
	public $autoRender = false;
}

class TagsControllerTest extends CakeTestCase {
	public $Tags = null;

	public function startTest() {
		$this->Tags = new TestTags();
		$this->Tags->constructClasses();
	}

	public function testTagsControllerInstance() {
		$this->assertTrue(is_a($this->Tags, 'TagsController'));
	}

	public function endTest() {
		unset($this->Tags);
	}
}
?>
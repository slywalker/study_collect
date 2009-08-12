<?php 
/* SVN FILE: $Id$ */
/* CommentsController Test cases generated on: 2009-08-12 15:08:59 : 1250056859*/
App::import('Controller', 'Comments');

class TestComments extends CommentsController {
	public $autoRender = false;
}

class CommentsControllerTest extends CakeTestCase {
	public $Comments = null;

	public function startTest() {
		$this->Comments = new TestComments();
		$this->Comments->constructClasses();
	}

	public function testCommentsControllerInstance() {
		$this->assertTrue(is_a($this->Comments, 'CommentsController'));
	}

	public function endTest() {
		unset($this->Comments);
	}
}
?>
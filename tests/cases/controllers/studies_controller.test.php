<?php 
/* SVN FILE: $Id$ */
/* StudiesController Test cases generated on: 2009-07-24 19:07:02 : 1248430562*/
App::import('Controller', 'Studies');

class TestStudies extends StudiesController {
	public $autoRender = false;
}

class StudiesControllerTest extends CakeTestCase {
	public $Studies = null;

	public function startTest() {
		$this->Studies = new TestStudies();
		$this->Studies->constructClasses();
	}

	public function testStudiesControllerInstance() {
		$this->assertTrue(is_a($this->Studies, 'StudiesController'));
	}

	public function endTest() {
		unset($this->Studies);
	}
}
?>
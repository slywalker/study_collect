<?php 
/* SVN FILE: $Id$ */
/* StudiesUsersController Test cases generated on: 2009-08-10 23:08:40 : 1249914640*/
App::import('Controller', 'StudiesUsers');

class TestStudiesUsers extends StudiesUsersController {
	public $autoRender = false;
}

class StudiesUsersControllerTest extends CakeTestCase {
	public $StudiesUsers = null;

	public function startTest() {
		$this->StudiesUsers = new TestStudiesUsers();
		$this->StudiesUsers->constructClasses();
	}

	public function testStudiesUsersControllerInstance() {
		$this->assertTrue(is_a($this->StudiesUsers, 'StudiesUsersController'));
	}

	public function endTest() {
		unset($this->StudiesUsers);
	}
}
?>
<?php 
/* SVN FILE: $Id$ */
/* ProfilesController Test cases generated on: 2009-08-08 14:08:36 : 1249710696*/
App::import('Controller', 'Profiles');

class TestProfiles extends ProfilesController {
	public $autoRender = false;
}

class ProfilesControllerTest extends CakeTestCase {
	public $Profiles = null;

	public function startTest() {
		$this->Profiles = new TestProfiles();
		$this->Profiles->constructClasses();
	}

	public function testProfilesControllerInstance() {
		$this->assertTrue(is_a($this->Profiles, 'ProfilesController'));
	}

	public function endTest() {
		unset($this->Profiles);
	}
}
?>
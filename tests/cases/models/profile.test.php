<?php 
/* SVN FILE: $Id$ */
/* Profile Test cases generated on: 2009-08-08 14:08:36 : 1249710696*/
App::import('Model', 'Profile');

class ProfileTestCase extends CakeTestCase {
	public $Profile = null;
	public $fixtures = array('app.profile');

	public function startTest() {
		$this->Profile =& ClassRegistry::init('Profile');
	}

	public function testProfileInstance() {
		$this->assertTrue(is_a($this->Profile, 'Profile'));
	}

	public function testProfileFind() {
		$this->Profile->recursive = -1;
		$results = $this->Profile->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Profile' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'user_id'  => 'Lorem ipsum dolor sit amet',
			'blog'  => 'Lorem ipsum dolor sit amet',
			'twitter'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>
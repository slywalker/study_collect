<?php 
/* SVN FILE: $Id$ */
/* StudiesUser Test cases generated on: 2009-08-10 23:08:40 : 1249914640*/
App::import('Model', 'StudiesUser');

class StudiesUserTestCase extends CakeTestCase {
	public $StudiesUser = null;
	public $fixtures = array('app.studies_user');

	public function startTest() {
		$this->StudiesUser =& ClassRegistry::init('StudiesUser');
	}

	public function testStudiesUserInstance() {
		$this->assertTrue(is_a($this->StudiesUser, 'StudiesUser'));
	}

	public function testStudiesUserFind() {
		$this->StudiesUser->recursive = -1;
		$results = $this->StudiesUser->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('StudiesUser' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'study_id'  => 'Lorem ipsum dolor sit amet',
			'user_id'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
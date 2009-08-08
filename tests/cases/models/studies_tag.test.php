<?php 
/* SVN FILE: $Id$ */
/* StudiesTag Test cases generated on: 2009-08-05 19:08:46 : 1249468246*/
App::import('Model', 'StudiesTag');

class StudiesTagTestCase extends CakeTestCase {
	public $StudiesTag = null;
	public $fixtures = array('app.studies_tag', 'app.study', 'app.tag');

	public function startTest() {
		$this->StudiesTag =& ClassRegistry::init('StudiesTag');
	}

	public function testStudiesTagInstance() {
		$this->assertTrue(is_a($this->StudiesTag, 'StudiesTag'));
	}

	public function testStudiesTagFind() {
		$this->StudiesTag->recursive = -1;
		$results = $this->StudiesTag->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('StudiesTag' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'study_id'  => 'Lorem ipsum dolor sit amet',
			'tag_id'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
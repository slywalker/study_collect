<?php 
/* SVN FILE: $Id$ */
/* Study Test cases generated on: 2009-07-24 19:07:02 : 1248430562*/
App::import('Model', 'Study');

class StudyTestCase extends CakeTestCase {
	public $Study = null;
	public $fixtures = array('app.study');

	public function startTest() {
		$this->Study =& ClassRegistry::init('Study');
	}

	public function testStudyInstance() {
		$this->assertTrue(is_a($this->Study, 'Study'));
	}

	public function testStudyFind() {
		$this->Study->recursive = -1;
		$results = $this->Study->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Study' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'account_id'  => 'Lorem ipsum dolor sit amet',
			'study_name'  => 'Lorem ipsum dolor sit amet',
			'study_date'  => '2009-07-24',
			'url'  => 'Lorem ipsum dolor sit amet',
			'modified'  => '2009-07-24 19:16:02',
			'created'  => '2009-07-24 19:16:02'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
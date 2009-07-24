<?php 
/* SVN FILE: $Id$ */
/* Content Test cases generated on: 2009-07-24 19:07:05 : 1248430565*/
App::import('Model', 'Content');

class ContentTestCase extends CakeTestCase {
	public $Content = null;
	public $fixtures = array('app.content');

	public function startTest() {
		$this->Content =& ClassRegistry::init('Content');
	}

	public function testContentInstance() {
		$this->assertTrue(is_a($this->Content, 'Content'));
	}

	public function testContentFind() {
		$this->Content->recursive = -1;
		$results = $this->Content->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Content' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'account_id'  => 'Lorem ipsum dolor sit amet',
			'study_id'  => 'Lorem ipsum dolor sit amet',
			'title'  => 'Lorem ipsum dolor sit amet',
			'url'  => 'Lorem ipsum dolor sit amet',
			'modified'  => '2009-07-24 19:16:05',
			'created'  => '2009-07-24 19:16:05'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
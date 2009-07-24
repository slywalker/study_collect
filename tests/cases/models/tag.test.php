<?php 
/* SVN FILE: $Id$ */
/* Tag Test cases generated on: 2009-07-24 19:07:10 : 1248430570*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	public $Tag = null;
	public $fixtures = array('app.tag');

	public function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	public function testTagInstance() {
		$this->assertTrue(is_a($this->Tag, 'Tag'));
	}

	public function testTagFind() {
		$this->Tag->recursive = -1;
		$results = $this->Tag->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Tag' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'account_id'  => 'Lorem ipsum dolor sit amet',
			'name'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
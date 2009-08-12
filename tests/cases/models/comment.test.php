<?php 
/* SVN FILE: $Id$ */
/* Comment Test cases generated on: 2009-08-12 14:08:10 : 1250056090*/
App::import('Model', 'Comment');

class CommentTestCase extends CakeTestCase {
	public $Comment = null;
	public $fixtures = array('app.comment', 'app.user');

	public function startTest() {
		$this->Comment =& ClassRegistry::init('Comment');
	}

	public function testCommentInstance() {
		$this->assertTrue(is_a($this->Comment, 'Comment'));
	}

	public function testCommentFind() {
		$this->Comment->recursive = -1;
		$results = $this->Comment->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Comment' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'user_id'  => 'Lorem ipsum dolor sit amet',
			'model_name'  => 'Lorem ipsum dolor sit amet',
			'foreign_key'  => 'Lorem ipsum dolor sit amet',
			'comment'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-08-12 14:48:09'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
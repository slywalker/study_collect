<?php 
/* SVN FILE: $Id$ */
/* Comment Fixture generated on: 2009-08-12 14:08:09 : 1250056089*/

class CommentFixture extends CakeTestFixture {
	public $name = 'Comment';
	public $table = 'comments';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'model_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foreign_key' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'comment' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'model_name' => array('column' => 'model_name', 'unique' => 0), 'foreign_key' => array('column' => 'foreign_key', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'user_id'  => 'Lorem ipsum dolor sit amet',
		'model_name'  => 'Lorem ipsum dolor sit amet',
		'foreign_key'  => 'Lorem ipsum dolor sit amet',
		'comment'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-08-12 14:48:09'
	));
}
?>
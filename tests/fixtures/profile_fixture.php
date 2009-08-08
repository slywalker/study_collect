<?php 
/* SVN FILE: $Id$ */
/* Profile Fixture generated on: 2009-08-08 14:08:36 : 1249710696*/

class ProfileFixture extends CakeTestFixture {
	public $name = 'Profile';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'blog' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'twitter' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 255),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'user_id'  => 'Lorem ipsum dolor sit amet',
		'blog'  => 'Lorem ipsum dolor sit amet',
		'twitter'  => 1
	));
}
?>
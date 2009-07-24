<?php 
/* SVN FILE: $Id$ */
/* Content Fixture generated on: 2009-07-24 19:07:05 : 1248430565*/

class ContentFixture extends CakeTestFixture {
	public $name = 'Content';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'url' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'account_id'  => 'Lorem ipsum dolor sit amet',
		'study_id'  => 'Lorem ipsum dolor sit amet',
		'title'  => 'Lorem ipsum dolor sit amet',
		'url'  => 'Lorem ipsum dolor sit amet',
		'modified'  => '2009-07-24 19:16:05',
		'created'  => '2009-07-24 19:16:05'
	));
}
?>
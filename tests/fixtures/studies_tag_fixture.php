<?php 
/* SVN FILE: $Id$ */
/* StudiesTag Fixture generated on: 2009-08-05 19:08:46 : 1249468246*/

class StudiesTagFixture extends CakeTestFixture {
	public $name = 'StudiesTag';
	public $table = 'studies_tags';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'study_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'tag_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'tag_id' => array('column' => 'tag_id', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'study_id'  => 'Lorem ipsum dolor sit amet',
		'tag_id'  => 'Lorem ipsum dolor sit amet'
	));
}
?>
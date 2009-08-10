<?php 
/* SVN FILE: $Id$ */
/* StudiesUser Fixture generated on: 2009-08-10 23:08:40 : 1249914640*/

class StudiesUserFixture extends CakeTestFixture {
	public $name = 'StudiesUser';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'study_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'user_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'study_id'  => 'Lorem ipsum dolor sit amet',
		'user_id'  => 'Lorem ipsum dolor sit amet'
	));
}
?>
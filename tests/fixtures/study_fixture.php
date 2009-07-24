<?php 
/* SVN FILE: $Id$ */
/* Study Fixture generated on: 2009-07-24 19:07:02 : 1248430562*/

class StudyFixture extends CakeTestFixture {
	public $name = 'Study';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'study_date' => array('type'=>'date', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'url' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0), 'study_date' => array('column' => 'study_date', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'account_id'  => 'Lorem ipsum dolor sit amet',
		'study_name'  => 'Lorem ipsum dolor sit amet',
		'study_date'  => '2009-07-24',
		'url'  => 'Lorem ipsum dolor sit amet',
		'modified'  => '2009-07-24 19:16:02',
		'created'  => '2009-07-24 19:16:02'
	));
}
?>
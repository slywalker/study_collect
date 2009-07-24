<?php 
/* SVN FILE: $Id$ */
/* Tag Fixture generated on: 2009-07-24 19:07:10 : 1248430570*/

class TagFixture extends CakeTestFixture {
	public $name = 'Tag';
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0))
	);
	public $records = array(array(
		'id'  => 'Lorem ipsum dolor sit amet',
		'account_id'  => 'Lorem ipsum dolor sit amet',
		'name'  => 'Lorem ipsum dolor sit amet'
	));
}
?>
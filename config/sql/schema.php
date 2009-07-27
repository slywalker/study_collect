<?php 
/* SVN FILE: $Id$ */
/* StudyCollect schema generated on: 2009-07-27 16:07:58 : 1248681598*/
class StudyCollectSchema extends CakeSchema {
	var $name = 'StudyCollect';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $contents = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'user_id', 'unique' => 0), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	var $studies = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'study_date' => array('type' => 'date', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'user_id', 'unique' => 0), 'study_date' => array('column' => 'study_date', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	var $studies_tags = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'study_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'tag_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'tag_id' => array('column' => 'tag_id', 'unique' => 0))
	);
	var $tags = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'tag' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'user_id', 'unique' => 0))
	);
}
?>
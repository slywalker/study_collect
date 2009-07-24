<?php 
/* SVN FILE: $Id$ */
/* StudyCollect schema generated on: 2009-07-24 21:07:35 : 1248440255*/
class StudyCollectSchema extends CakeSchema {
	var $name = 'StudyCollect';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $accounts = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'hash_password' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'expires' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'email_checkcode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'password_checkcode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'disabled' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'email_tmp' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'email' => array('column' => 'email', 'unique' => 0), 'expires' => array('column' => 'expires', 'unique' => 0), 'email_checkcode' => array('column' => 'email_checkcode', 'unique' => 0), 'password_checkcode' => array('column' => 'password_checkcode', 'unique' => 0), 'disabled' => array('column' => 'disabled', 'unique' => 0))
	);
	var $contents = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	var $studies = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'study_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'study_date' => array('type' => 'date', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0), 'study_date' => array('column' => 'study_date', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'created' => array('column' => 'created', 'unique' => 0))
	);
	var $studies_tags = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'study_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'tag_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'study_id' => array('column' => 'study_id', 'unique' => 0), 'tag_id' => array('column' => 'tag_id', 'unique' => 0))
	);
	var $tags = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'account_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'account_id' => array('column' => 'account_id', 'unique' => 0))
	);
}
?>
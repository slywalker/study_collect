<?php
class Study extends AppModel {

	public $name = 'Study';
	public $validate = array(
		'account_id' => array('notEmpty'),
		'study_name' => array('notEmpty'),
		'url' => array(
			array(
				'rule' => array('url'),
				'message' => 'This field needs url format',
			), 
			array(
				'rule' => array('notEmpty'),
				'message' => 'This field is required',
			),
		),
	);

	public $belongsTo = array('AccountManager.User');
	public $hasMany = array('Content' => array('order' => array('Content.modified' => 'desc')));
	public $hasAndBelongsToMany = array('Tag');

}
?>
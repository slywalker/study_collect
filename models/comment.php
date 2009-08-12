<?php
class Comment extends AppModel {
	public $name = 'Comment';
	public $validate = array(
		'user_id' => array('notempty'),
		'model_name' => array('notempty'),
		'foreign_key' => array('notempty'),
		'comment' => array('notempty')
	);

	public $belongsTo = array('User');
}
?>
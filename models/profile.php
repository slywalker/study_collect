<?php
class Profile extends AppModel {
	public $name = 'Profile';
	public $validate = array(
		'user_id' => array('notempty'),
		'blog' => array('url'),
		'twitter_id' => array(
			'rule' => array('custom', '/^[a-z0-9_]*$/i'),
			'message' => 'Not ID Pattern',
		),
	);

	public $belongsTo = array('User');
}
?>
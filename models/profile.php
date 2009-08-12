<?php
class Profile extends AppModel {
	public $name = 'Profile';
	public $validate = array(
		'user_id' => array('notempty'),
		'blog' => array('url'),
		//'twitter_id' => array('notempty'),
	);

	public $belongsTo = array('User');
}
?>
<?php
class Profile extends AppModel {
	public $name = 'Profile';
	public $validate = array(
		'user_id' => array('notempty'),
		'blog' => array('notempty'),
		'twitter_id' => array('notempty')
	);

	public $belongsTo = array('User');
}
?>
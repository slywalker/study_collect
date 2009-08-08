<?php
class Profile extends AppModel {

	public $name = 'Profile';
	public $validate = array(
		'user_id' => array('notempty'),
		'blog' => array('notempty'),
		'twitter' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>
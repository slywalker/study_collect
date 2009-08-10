<?php
class Tag extends AppModel {
	public $name = 'Tag';
	public $validate = array(
		'account_id' => array('notempty'),
		'tag' => array('notempty')
	);

	public $belongsTo = array('AccountManager.User');
	public $hasAndBelongsToMany = array('Study');
}
?>
<?php
class StudiesUser extends AppModel {
	public $name = 'StudiesUser';
	public $belongsTo = array('Study', 'User');
}
?>
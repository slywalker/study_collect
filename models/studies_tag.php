<?php
class StudiesTag extends AppModel {
	public $name = 'StudiesTag';
	public $belongsTo = array('Study', 'Tag');
}
?>
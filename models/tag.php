<?php
class Tag extends AppModel {

	public $name = 'Tag';
	public $validate = array(
		'account_id' => array('notempty'),
		'tag' => array('notempty')
	);

	public $belongsTo = array('AccountManager.User');
	public $hasAndBelongsToMany = array('Study');

	public function beforeValidate() {
		$study_id = $this->Session->read('Study.id');
		if (!$study_id) {
			return false;
		}
		$this->data['Study']['Study'] = $study_id;
	}

}
?>
<?php
class Content extends AppModel {
	public $name = 'Content';
	public $validate = array(
		'user_id' => array('notEmpty'),
		'title' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => true,
		),
		'url' => array(
			array(
				'rule' => array('url'),
				'message' => 'This field needs url format',
			), 
			array(
				'rule' => array('notempty'),
				'message' => 'not empty',
			),
		),
	);

	public $belongsTo = array('AccountManager.User', 'Study');

	public function beforeValidate() {
		$study_id = $this->Session->read('Study.id');
		if (!$study_id) {
			return false;
		}
		$this->data[$this->alias]['study_id'] = $study_id;

		if (isset($this->data[$this->alias]['url']) && !isset($this->data[$this->alias]['title'])) {
			$this->data[$this->alias]['title'] = $this->getTitle($this->data[$this->alias]['url']);
		}
	}
}
?>
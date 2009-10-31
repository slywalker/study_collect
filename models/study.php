<?php
class Study extends AppModel {
	public $name = 'Study';
	public $validate = array(
		'user_id' => array('notEmpty'),
		'study_name' => array(
			'rule' => 'notEmpty',
			'allowEmpty' => true,
		),
		'url' => array(
			array(
				'rule' => array('url'),
			), 
			array(
				'rule' => array('notEmpty'),
				'message' => 'This field is required',
			),
		),
	);

	public $belongsTo = array('AccountManager.User');
	public $hasMany = array(
		'Content' => array('order' => array('Content.modified' => 'desc')),
		'Comment' => array(
			'foreignKey' => 'foreign_key',
			'order' => array('Comment.created' => 'ASC'),
			'conditions' => array('Comment.model_name' => 'Study'),
		),
	);
	public $hasAndBelongsToMany = array(
		'Tag' => array('unique' => true),
		'Attend' => array('className' => 'User', 'fields' => array('id', 'email', 'username')),
	);

	public function beforeValidate() {
		parent::beforeValidate();
		if (isset($this->data[$this->alias]['url']) && !isset($this->data[$this->alias]['study_name'])) {
			$this->data[$this->alias]['study_name'] = $this->getTitle($this->data[$this->alias]['url']);
		}

		if (isset($this->data[$this->alias]['tag_list'])) {
			preg_match_all('/\[([^\]]*)\]/', $this->data[$this->alias]['tag_list'], $matches);
			if (isset($matches[1])) {
				$this->data['Tag']['Tag'] = array();
				foreach ($matches[1] as $tag) {
					$tagValue = mb_convert_kana($tag, 'as');
					$conditions = array('LOWER(Tag.tag)' => strtolower($tagValue));
					$this->Tag->contain();
					$this->Tag->foreignKey();
					$tag_id = $this->Tag->field('id', $conditions);
					if (!$tag_id) {
						$data = array('Tag' => array('tag' => $tagValue));
						$this->Tag->create();
						if (!$this->Tag->save($data)) {
							return false;
						}
						$tag_id = $this->Tag->getInsertID();
					}
					$this->data['Tag']['Tag'][] = $tag_id;
				}
			}
			unset($this->data[$this->alias]['tag_list']);
		}
		return true;
	}
	
	public function afterFind($results) {
		foreach ($results as $key => $result) {
			$results[$key][$this->alias]['tag_list'] = null;
			if (!empty($result['Tag'])) {
				$tags = implode('][', Set::extract('/Tag/tag', $result));
				if ($tags) {
					$results[$key][$this->alias]['tag_list'] = '['.$tags.']';
				}
			}
		}
		return $results;
	}

}
?>
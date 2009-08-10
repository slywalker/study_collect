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
				'message' => 'This field needs url format',
			), 
			array(
				'rule' => array('notEmpty'),
				'message' => 'This field is required',
			),
		),
	);

	public $belongsTo = array('AccountManager.User');
	public $hasMany = array('Content' => array('order' => array('Content.modified' => 'desc')));
	public $hasAndBelongsToMany = array(
		'Tag' => array('unique' => true),
		'Attend' => array('className' => 'User', 'fields' => array('id', 'email', 'username')),
	);

	public function beforeValidate() {
		if (isset($this->data[$this->alias]['url']) && !isset($this->data[$this->alias]['study_name'])) {
			$this->data[$this->alias]['study_name'] = $this->getTitle($this->data[$this->alias]['url']);
		}

		if (isset($this->data[$this->alias]['tag_list'])) {
			preg_match_all('/\[([^\]]*)\]/', $this->data[$this->alias]['tag_list'], $matches);
			if (isset($matches[1])) {
				$this->data['Tag']['Tag'] = array();
				foreach ($matches[1] as $tag) {
					$tag = mb_convert_kana($tag, 'as');
					$tag_id = $this->Tag->field('id', array('LOWER(Tag.tag)' => strtolower($tag)));
					if (!$tag_id) {
						$data = array('Tag' => array('tag' => $tag));
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
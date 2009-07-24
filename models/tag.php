<?php
class Tag extends AppModel {

	public $name = 'Tag';
	public $validate = array(
		'account_id' => array('notempty'),
		'name' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasAndBelongsToMany = array(
		'Study' => array(
			'className' => 'Study',
			'joinTable' => 'studies_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'study_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>
<?php
App::import('Component', 'Sesssion');
class AppModel extends Model {
	public $actsAs = array(
		'Containable',
		'ToolKit.ForeignKey' => array('foreignKey' => 'account_id'),
	);
	protected $Session = null;
	
	public function __construct($id = false, $table = NULL, $ds = NULL) {
		parent::__construct($id, $table, $ds);
		if (class_exists('SessionComponent')) {
			$this->Session = new SessionComponent;
		}
	}

	public function callbackForeignKey() {
		return Configure::read('Auth.id');
	}
}
?>
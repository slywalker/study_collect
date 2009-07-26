<?php
App::import('Component', 'Sesssion');
class AppModel extends Model {
	public $actsAs = array(
		'Containable',
		'AccountManager.ForeignKey',
		'ToolKit.AddValidationRule',
	);
	protected $Session = null;
	
	public function __construct($id = false, $table = NULL, $ds = NULL) {
		parent::__construct($id, $table, $ds);
		if (class_exists('SessionComponent')) {
			$this->Session = new SessionComponent;
		}
	}
	
	//Validation message i18n
	function invalidate($field, $value = true){
		parent::invalidate($field, $value);
		$this->validationErrors[$field] = __($value, true);
	}
}
?>
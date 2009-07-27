<?php
App::import('Component', 'Sesssion');
class AppModel extends Model {
	public $actsAs = array(
		'Containable',
		'AccountManager.ForeignKey',
		'ToolKit.AddValidationRule',
	);

	//Validation message i18n
	function invalidate($field, $value = true){
		parent::invalidate($field, $value);
		$this->validationErrors[$field] = __($value, true);
	}
}
?>
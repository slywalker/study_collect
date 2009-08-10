<?php
App::import('Component', 'Sesssion');
App::import('Core', 'HttpSocket');
class AppModel extends Model {
	public $actsAs = array(
		'Containable',
		'AccountManager.ForeignKey',
		'ToolKit.AddValidationRule',
	);

	//Validation message i18n
	public function invalidate($field, $value = true){
		parent::invalidate($field, $value);
		$this->validationErrors[$field] = __($value, true);
	}

	protected function getTitle($url) {
		$HttpSocket = new HttpSocket();
		$results = $HttpSocket->get($url);
		preg_match('/<title>([^<]*)<\/title>/i', $results, $matchs);
		if (isset($matchs[1])) {
			return mb_trim($matchs[1]);
		}
		return null;
	}
}
?>
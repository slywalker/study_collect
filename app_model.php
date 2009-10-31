<?php
App::import('Component', 'Sesssion');
App::import('Core', 'HttpSocket');
class AppModel extends Model {
	public $actsAs = array(
		'Containable',
		'AccountManager.ForeignKey',
		'CustomValidate.Attach',
	);

	protected function getTitle($url) {
		if (!empty($url)) {
			$HttpSocket = new HttpSocket();
			$results = $HttpSocket->get($url);
			$results = mb_convert_encoding($results, Configure::read('App.encoding'), 'auto');
			preg_match('/<title>([^<]*)<\/title>/i', $results, $matchs);
			if (isset($matchs[1])) {
				return mb_trim($matchs[1]);
			}
		}
		return '';
	}
}
?>
<?php
class AppController extends Controller {
	public $components = array(
		'Security',
		'Auth',
		'AccountManager.AuthSetting',
		'DebugKit.Toolbar',
	);
	public $helpers = array('Time', 'AppPaginator', 'Gravatar', 'Jquery.JqueryUi');
	
	public function beforeFilter() {
		$this->Auth->allow('*');
		$this->Auth->deny('add', 'edit', 'delete');
	}
}
?>
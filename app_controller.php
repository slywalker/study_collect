<?php
class AppController extends Controller {
	public $components = array(
		'AccountManager.AuthSetting',
		'Security',
		'Auth',
		'DebugKit.Toolbar',
	);
	public $helpers = array('Time', 'AppPaginator', 'Gravatar', 'ToolKit.JqueryUi');
}
?>
<?php
class AppController extends Controller {
	public $components = array(
		'Security',
		'AccountManager.AuthSetting',
		'Auth',
		'DebugKit.Toolbar',
	);
	public $helpers = array('AppPaginator');
}
?>
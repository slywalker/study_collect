<div id="main">
	<div class="profiles view">
		<h2><?php  __('Profile');?></h2>
		<dl>
			<?php
			$lists = array();
			$lists[] = array('dt' => __('Icon', true), 'dd' => $html->image($gravatar->url($profile['User']['email'], 50), array('alt' => h($profile['User']['username']), 'title' => h($profile['User']['username']), 'url' => 'http://www.gravatar.com/')));
			$lists[] = array('dt' => __('Username', true), 'dd' => h($profile['User']['username']));
			$lists[] = array('dt' => __('Blog', true), 'dd' => $html->link($profile['Profile']['blog']));
			$lists[] = array('dt' => __('Twitter', true), 'dd' => $html->link('http://twitter.com/'.$profile['Profile']['twitter_id']));
			foreach ($lists as $key => $list) {
				$class = array();
				if ($key % 2 == 0) {
					$class = array('class' => 'altrow');
				}
				echo $html->tag('dt', $list['dt'], $class);
				echo $html->tag('dd', $list['dd'].'&nbsp;', $class);
			}
			?>
		</dl>
	</div>
</div>
<div id="sidebar">
	<?php if ($session->check('Auth.User') && $session->read('Auth.User.id') === $profile['User']['id']) :?>
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] = $html->link(__('Edit Profile', true), array('action' => 'edit', $profile['Profile']['id']));
		//$li[] = $html->link(__('Delete Profile', true), array('action' => 'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['Profile']['id']));
		//$li[] = $html->link(__('List Profiles', true), array('action' => 'index'));
		//$li[] = $html->link(__('New Profile', true), array('action' => 'add'));
		//$li[] = $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index'));
		//$li[] = $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<?php endif;?>
	<!--
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
	-->
</div>

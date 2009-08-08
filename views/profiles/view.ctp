<div id="main">
	<div class="profiles view">
		<h2><?php  __('Profile');?></h2>
		<dl>
			<?php
			$lists = array();
			$lists[] = array('dt' => __('Id', true), 'dd' => h($profile['Profile']['id']));
			$lists[] = array('dt' => __('User Id', true), 'dd' => h($profile['Profile']['user_id']));
			$lists[] = array('dt' => __('Blog', true), 'dd' => h($profile['Profile']['blog']));
			$lists[] = array('dt' => __('Twitter', true), 'dd' => h($profile['Profile']['twitter']));
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
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] = $html->link(__('Edit Profile', true), array('action' => 'edit', $profile['Profile']['id']));
		$li[] = $html->link(__('Delete Profile', true), array('action' => 'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['Profile']['id']));
		$li[] = $html->link(__('List Profiles', true), array('action' => 'index'));
		$li[] = $html->link(__('New Profile', true), array('action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

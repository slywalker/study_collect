<div id="main">
	<div class="comments view">
		<h2><?php  __('Comment');?></h2>
		<dl>
			<?php
			$lists = array();
			$lists[] = array('dt' => __('Id', true), 'dd' => h($comment['Comment']['id']));
			$lists[] = array('dt' => __('User', true), 'dd' => $html->link($comment['User']['id'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])));
			$lists[] = array('dt' => __('Model Name', true), 'dd' => h($comment['Comment']['model_name']));
			$lists[] = array('dt' => __('Foreign Key', true), 'dd' => h($comment['Comment']['foreign_key']));
			$lists[] = array('dt' => __('Comment', true), 'dd' => h($comment['Comment']['comment']));
			$lists[] = array('dt' => __('Created', true), 'dd' => h($comment['Comment']['created']));
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
		$li[] = $html->link(__('Edit Comment', true), array('action' => 'edit', $comment['Comment']['id']));
		$li[] = $html->link(__('Delete Comment', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id']));
		$li[] = $html->link(__('List Comments', true), array('action' => 'index'));
		$li[] = $html->link(__('New Comment', true), array('action' => 'add'));
		$li[] = $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index'));
		$li[] = $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

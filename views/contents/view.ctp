<div id="main">
	<div class="contents view">
		<h2><?php  __('Content');?></h2>
		<dl>
			<?php
			$lists = array();
			$lists[] = array('dt' => __('Id', true), 'dd' => h($content['Content']['id']));
			$lists[] = array('dt' => __('Account Id', true), 'dd' => h($content['Content']['account_id']));
			$lists[] = array('dt' => __('Study Id', true), 'dd' => h($content['Content']['study_id']));
			$lists[] = array('dt' => __('Title', true), 'dd' => h($content['Content']['title']));
			$lists[] = array('dt' => __('Url', true), 'dd' => h($content['Content']['url']));
			$lists[] = array('dt' => __('Modified', true), 'dd' => h($content['Content']['modified']));
			$lists[] = array('dt' => __('Created', true), 'dd' => h($content['Content']['created']));
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
		$li[] = $html->link(__('Edit Content', true), array('action' => 'edit', $content['Content']['id']));
		$li[] = $html->link(__('Delete Content', true), array('action' => 'delete', $content['Content']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $content['Content']['id']));
		$li[] = $html->link(__('List Contents', true), array('action' => 'index'));
		$li[] = $html->link(__('New Content', true), array('action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

<div id="main">
	<div class="tags view">
		<h2><?php  __('Tag');?></h2>
		<dl>
			<?php
			$lists = array();
			$lists[] = array('dt' => __('Id', true), 'dd' => h($tag['Tag']['id']));
			$lists[] = array('dt' => __('User', true), 'dd' => $html->link($tag['User']['id'], array('controller' => 'users', 'action' => 'view', $tag['User']['id'])));
			$lists[] = array('dt' => __('Tag', true), 'dd' => h($tag['Tag']['tag']));
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
	<div class="related">
		<h3><?php __('Related Studies');?></h3>
		<?php if (!empty($tag['Study'])):?>
		<table>
			<?php
			$th = array();
			$th[] = __('Id', true);
			$th[] = __('User Id', true);
			$th[] = __('Study Name', true);
			$th[] = __('Study Date', true);
			$th[] = __('Url', true);
			$th[] = __('Modified', true);
			$th[] = __('Created', true);
			$th[] = __('Actions', true);
			echo $html->tableHeaders($th);
			foreach ($tag['Study'] as $study) {
				$td = array();
				$td[] = h($study['id']);
				$td[] = h($study['user_id']);
				$td[] = h($study['study_name']);
				$td[] = h($study['study_date']);
				$td[] = h($study['url']);
				$td[] = h($study['modified']);
				$td[] = h($study['created']);
				$actions = array();
				$actions[] = $html->link(__('View', true), array('controller' => 'studies', 'action' => 'view', $study['id']));
				$actions[] = $html->link(__('Edit', true), array('controller' => 'studies', 'action' => 'edit', $study['id']));
				$actions[] = $html->link(__('Delete', true), array('controller' => 'studies', 'action' => 'delete', $study['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $study['id']));
				$td[] = array(implode('&nbsp;|&nbsp;', $actions), array('class' => 'actions'));
				echo $html->tableCells($td, array('class' => 'altrow'));
			}
			?>
		</table>
		<?php endif; ?>

		<div class="actions">
			<?php
			$li = array();
			$li[] = $html->link(__('New Study', true), array('controller' => 'studies', 'action' => 'add'));
			echo $html->nestedList($li);
			?>
		</div>
	</div>
</div>
<div id="sidebar">
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] = $html->link(__('Edit Tag', true), array('action' => 'edit', $tag['Tag']['id']));
		$li[] = $html->link(__('Delete Tag', true), array('action' => 'delete', $tag['Tag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['Tag']['id']));
		$li[] = $html->link(__('List Tags', true), array('action' => 'index'));
		$li[] = $html->link(__('New Tag', true), array('action' => 'add'));
		$li[] = $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index'));
		$li[] = $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));
		$li[] = $html->link(__('List Studies', true), array('controller' => 'studies', 'action' => 'index'));
		$li[] = $html->link(__('New Study', true), array('controller' => 'studies', 'action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

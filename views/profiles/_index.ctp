<div id="main">
	<?php echo $form->create(null, array('action' => 'delete'));?>
	<div class="profiles index">
		<h2><?php __('Profiles');?></h2>
		<p>
			<?php
			echo $paginator->counter(array(
				'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
			));
			?>
		</p>
		<p><?php echo $appPaginator->limit();?></p>
		<table>
			<?php
			$th = array();
			$th[] = __('Del', true);
			$th[] = $appPaginator->sort('id');
			$th[] = $appPaginator->sort('user_id');
			$th[] = $appPaginator->sort('blog');
			$th[] = $appPaginator->sort('twitter_id');
			$th[] = __('Actions', true);
			echo $html->tableHeaders($th);
			foreach ($profiles as $key => $profile) {
				$td = array();
				$td[] = $form->checkbox('delete.'.$key, array('value' => $profile['Profile']['id']));
				$td[] = h($profile['Profile']['id']);
				$td[] = $html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id']));
				$td[] = h($profile['Profile']['blog']);
				$td[] = h($profile['Profile']['twitter_id']);
				$actions = array();
				$actions[] = $html->link(__('View', true), array('action' => 'view', $profile['Profile']['id']));
				$actions[] = $html->link(__('Edit', true), array('action' => 'edit', $profile['Profile']['id']));
				$actions[] = $html->link(__('Delete', true), array('action' => 'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['Profile']['id']));
				$td[] = array(implode('&nbsp;|&nbsp;', $actions), array('class' => 'actions'));
				echo $html->tableCells($td, array('class' => 'altrow'));
			}
			?>
		</table>
	</div>
	<div class="actions-bar">
		<div class="actions">
			<?php echo $form->submit(__('Delete Selected', true), array('div' => false));?>
		</div>
		<div class="pagination">
			<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
			<?php echo $paginator->numbers(array('separator' => null));?>
			<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
		<div class="clear"></div>
	</div>
	</form>
</div>
<div id="sidebar">
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] = $html->link(__('New Profile', true), array('action' => 'add'));
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

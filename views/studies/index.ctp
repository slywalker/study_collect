<div id="main">
	<div class="studies index">
		<h2><?php __('Studies');?></h2>
		<p>
			<?php
			echo $paginator->counter(array(
				'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
			));
			?>
		</p>
		<p><?php echo $appPaginator->limit();?></p>
		<div class="content">
			<?php
			$li = array();
			foreach ($studies as $key => $study) {
				$left = $html->image('http://img.simpleapi.net/small/'.$study['Study']['url'], array('alt' => h($study['Study']['study_name']), 'title' => h($study['Study']['study_name']), 'url' => array('action' => 'view', $study['Study']['id'])));
				$left = $html->div('left', $left);
				$items = array();
				$items[] = $html->tag('span', h($study['Study']['study_date']), array('class' => 'study_date'));
				$items[] = $html->tag('span', $html->link($study['Study']['study_name'], array('action' => 'view', $study['Study']['id'])), array('class' => 'study_name'));
				$items[] = $html->tag('span', $html->link($study['Study']['url'], $study['Study']['url'], array('target' => '_blank')), array('class' => 'url'));
				$grav_url = 'http://www.gravatar.com/avatar.php?gravatar_id='.md5(strtolower($study['Account']['email'])).'&size=20';
				$items[] = $html->image($grav_url, array('alt' => h($study['Account']['name']), 'title' => h($study['Account']['name']), 'url' => array('controller' => 'accounts', 'action' => 'view', $study['Account']['id']), array('class' => 'account_id')));
				if (Configure::read('Auth.id') === $study['Account']['id']) {
					$actions = array();
					$actions[] = $html->link(__('Edit', true), array('action' => 'edit', $study['Study']['id']));
					$actions[] = $html->link(__('Delete', true), array('action' => 'delete', $study['Study']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $study['Study']['id']));
					$items[] = $html->tag('span', implode('&nbsp;|&nbsp;', $actions), array('class' => 'actions'));
				}
				$item = $html->para(null, implode('<br />', $items));
				$item = $html->div('item', $item);
				$li[] = $left.$item.'<div class="clear"></div>';
			}
			echo $html->nestedList($li, array('class' => 'list'));
			?>
		</div>
	</div>
	<div class="actions-bar">
		<div class="pagination">
			<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
			<?php echo $paginator->numbers(array('separator' => null));?>
			<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="sidebar">
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] = $html->link(__('New Study', true), array('action' => 'add'));
		$li[] = $html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

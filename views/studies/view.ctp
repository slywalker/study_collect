<div id="main">
	<div class="studies view">
		<h2><?php echo h($study['Study']['study_name']);?></h2>
		<P>
			<?php 
			echo implode(' | ', Set::extract('/Tag/tag', $study));
			if ($session->check('Auth.User')) {
				echo $html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add'));
			}
			?>
		</p>
		<dl>
			<?php
			$lists = array();
			$lists[] = array(
				'dt' => __('Url', true),
				'dd' => $html->link($study['Study']['url'], $study['Study']['url'], array('target' => '_blank')),
			);
			$lists[] = array(
				'dt' => __('Study Date', true),
				'dd' => h($study['Study']['study_date']),
			);
			$lists[] = array(
				'dt' => __('Editor', true),
				'dd' => $html->image($gravatar->url($study['User']['email']), array('alt' => h($study['User']['username']), 'title' => h($study['User']['username']), 'url' => array('controller' => 'users', 'action' => 'view', $study['User']['id']), array('class' => 'user_id'))),
			);
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
		<h3><?php __('Related Contents');?></h3>
		<?php if (!empty($study['Content'])):?>
		<div class="content">
			<?php
			$li = array();
			foreach ($study['Content'] as $content) {
				$left = $html->image('http://img.simpleapi.net/small/'.$content['url'], array('alt' => $content['title'], 'title' => $content['title'], 'url' => $content['url']));
				$left = $html->div('left', $left);
				$items = array();
				$items[] = $html->link($content['title'], $content['url'], array('target' => '_blank'));
				if ($session->check('Auth.User') && $session->read('Auth.User.id') === $study['User']['id']) {
					$actions = array();
					$actions[] = $html->link(__('Edit', true), array('controller' => 'contents', 'action' => 'edit', $content['id']));
					$actions[] = $html->link(__('Delete', true), array('controller' => 'contents', 'action' => 'delete', $content['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $content['id']));
					$items[] = $html->tag('span', implode('&nbsp;|&nbsp;', $actions), array('class' => 'actions'));
				}
				$item = $html->para(null, implode('<br />', $items));
				$item = $html->div('item', $item);
				$li[] = $left.$item.'<div class="clear"></div>';
			}
			echo $html->nestedList($li, array('class' => 'list'));
			?>
		</div>
		<?php endif; ?>

		<div class="actions">
			<?php
			$li = array();
			$li[] = $html->link(__('New Content', true), array('controller' => 'contents', 'action' => 'add'));
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
		if ($session->check('Auth.User') && $session->read('Auth.User.id') === $study['User']['id']) {
			$li[] = $html->link(__('Edit Study', true), array('action' => 'edit', $study['Study']['id']));
			$li[] = $html->link(__('Delete Study', true), array('action' => 'delete', $study['Study']['id']), null, __('Are you sure you want to delete?', true));
		}
		$li[] = $html->link(__('List Studies', true), array('action' => 'index'));
		$li[] = $html->link(__('New Content', true), array('controller' => 'contents', 'action' => 'add'));
		$li[] = $html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index'));
		$li[] = $html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
</div>

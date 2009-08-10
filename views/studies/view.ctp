<div id="main">
	<div class="studies view">
		<h2><?php echo h($study['Study']['study_name']);?></h2>
		<?php
		if ($session->check('Auth.User') && $session->read('Auth.User.id') === $study['User']['id']) {
			if (!in_array($session->read('Auth.User.id'), Set::extract('/Attend/id', $study))) {
				echo $form->create('Study', array('action' => 'attended'));
				echo $form->end(__('Attended!', true));
			} else {
				echo $form->create('Study', array('action' => 'not_attended'));
				echo $form->end(__('Not Attended', true));
			}
		}
		echo $jqueryUi->icon('tag').implode(' | ', Set::extract('/Tag/tag', $study));
		echo '<br />';
		echo $jqueryUi->icon('calendar').h($study['Study']['study_date']);
		echo '<br />';
		echo $jqueryUi->icon('bookmark').$html->link($study['Study']['url'], $study['Study']['url'], array('target' => '_blank'));
		echo '<br />';
		echo $jqueryUi->icon('person').$html->image($gravatar->url($study['User']['email']), array('alt' => h($study['User']['username']), 'title' => h($study['User']['username']), 'url' => array('controller' => 'profiles', 'action' => 'view', $study['User']['Profile']['id']), array('class' => 'profile')));
		?>
	</div>
	<div class="related">
		<h3><?php __('Associate Participant');?></h3>
		<div class="content">
			<?php
			foreach ($study['Attend'] as $attend) {
				echo $html->image($gravatar->url($attend['email']), array('alt' => h($attend['username']), 'title' => h($attend['username']), 'url' => array('controller' => 'profiles', 'action' => 'view', $attend['id'])));
			}
			?>
		</div>
	</div>
	<div class="related">
		<h3><?php __('Related Contents');?></h3>
		<?php if (!empty($study['Content'])):?>
		<div class="content">
			<?php
			$li = array();
			foreach ($study['Content'] as $content) {
				$left = ' ';
				$left = $html->div('left', $left);
				$items = array();
				if ($session->check('Auth.User') && $session->read('Auth.User.id') === $study['User']['id']) {
					$actions = array();
					$actions[] = $jqueryUi->link(__('Edit', true), array('controller' => 'contents', 'action' => 'edit', $content['id']), array('icon' => 'pencil'));
					$actions[] = $jqueryUi->link(__('Delete', true), array('controller' => 'contents', 'action' => 'delete', $content['id']), array('icon' => 'trash'), sprintf(__('Are you sure you want to delete # %s?', true), $content['id']));
					$items[] = $html->div('actions', implode(' ', $actions), array('style' => 'float:right;'));
				}
				$items[] = $html->tag('span', h($content['title']), array('class' => 'title'));
				$items[] = $jqueryUi->icon('bookmark').$html->tag('span', $html->link($content['url'], $content['url'], array('target' => '_blank')), array('class' => 'url'));
				$item = $jqueryUi->icon('person').$html->image($gravatar->url($content['User']['email']), array('alt' => h($content['User']['username']), 'title' => h($content['User']['username']), 'url' => array('controller' => 'profiles', 'action' => 'view', $content['User']['id']), array('class' => 'user_id')));
				$items[] = $item;
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
		//$li[] = $html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index'));
		//$li[] = $html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<!--
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
	-->
</div>

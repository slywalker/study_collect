<div id="main">
	<div class="tags form">
		<?php
		echo $form->create('Tag');
		echo $form->inputs(array(
			'legend' => __('Edit Tag', true),
			'id',
			'tag',
			'Study' => array('multiple' => 'checkbox'),
		));
		echo $form->end(__('Submit', true));
		?>
	</div>
</div>
<div id="sidebar">
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] =$html->link(__('Delete', true), array('action' => 'delete', $form->value('Tag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tag.id')));
		$li[] = $html->link(__('List Tags', true), array('action' => 'index'));
		$li[] = $html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index'));
		$li[] = $html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add'));
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

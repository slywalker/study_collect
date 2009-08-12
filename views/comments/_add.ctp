<div id="main">
	<div class="comments form">
		<?php
		echo $form->create('Comment');
		echo $form->inputs(array(
			'legend' => __('Add Comment', true),
			'user_id',
			'model_name',
			'foreign_key',
			'comment',
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
		$li[] = $html->link(__('List Comments', true), array('action' => 'index'));
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

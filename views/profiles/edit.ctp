<div id="main">
	<div class="profiles form">
		<?php
		echo $form->create('Profile', array('action' => 'edit'));
		echo $form->inputs(array(
			'legend' => __('Edit Profile', true),
			'id',
			'blog' => array('after' => $html->para('description', __('Your Blog URL', true))),
			'twitter_id' => array('after' => $html->para('description', __('Your Twitter ID', true))),
		));
		echo $form->end(__('Submit', true));
		?>
	</div>
</div>
<div id="sidebar">
	<!--
	<div class="block">
		<h3><?php __('Actions');?></h3>
		<?php
		$li = array();
		$li[] =$html->link(__('Delete', true), array('action' => 'delete', $form->value('Profile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Profile.id')));
		$li[] = $html->link(__('List Profiles', true), array('action' => 'index'));
		echo $html->nestedList($li, array('class'=>'navigation'));
		?>
	</div>
	<div class="block notice">
		<h4>Notice Title</h4>
		<p>Morbi posuere urna vitae nunc. Curabitur ultrices, lorem ac aliquam blandit, lectus eros hendrerit eros, at eleifend libero ipsum hendrerit urna. Suspendisse viverra. Morbi ut magna. Praesent id ipsum. Sed feugiat ipsum ut felis. Fusce vitae nibh sed risus commodo pulvinar. Duis ut dolor. Cras ac erat pulvinar tortor porta sodales. Aenean tempor venenatis dolor.</p>
	</div>
	-->
</div>

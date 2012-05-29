<div class="volinterestslogs form">
<?php echo $this->Form->create('Volinterestslog');?>
	<fieldset>
		<legend><?php echo __('Edit Volinterestslog'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('interest_id');
		echo $this->Form->input('volunteer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Volinterestslog.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Volinterestslog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Volinterestslogs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>

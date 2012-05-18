<div class="volunteerstatuses form">
<?php echo $this->Form->create('Volunteerstatus');?>
	<fieldset>
		<legend><?php echo __('Edit Volunteerstatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('volunteerstatus_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Volunteerstatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Volunteerstatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Volunteerstatuses'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>

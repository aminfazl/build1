<div class="timesheets form">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php echo __('Edit Timesheet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activitytype_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('workdate');
		echo $this->Form->input('fromtime');
		echo $this->Form->input('totime');
		echo $this->Form->input('Event');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Timesheet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Timesheet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('action' => 'add')); ?></li>
	</ul>
</div>

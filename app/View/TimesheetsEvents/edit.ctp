<div class="timesheetsEvents form">
<?php echo $this->Form->create('TimesheetsEvent');?>
	<fieldset>
		<legend><?php echo __('Edit Timesheets Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('timesheet_id');
		echo $this->Form->input('event_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TimesheetsEvent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TimesheetsEvent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Timesheets Events'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

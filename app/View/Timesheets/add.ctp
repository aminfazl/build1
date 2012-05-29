<div class="timesheets form">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php echo __('Add Timesheet'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Timesheets'), array('action' => 'index'));?></li>

	</ul>
</div>

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
		<li><?php echo $this->Html->link(__('List Activitytypes'), array('controller' => 'activitytypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activitytype'), array('controller' => 'activitytypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

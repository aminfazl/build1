<div class="activitytypes form">
<?php echo $this->Form->create('Activitytype');?>
	<fieldset>
		<legend><?php echo __('Add Activitytype'); ?></legend>
	<?php
		echo $this->Form->input('activitytype_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activitytypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
	</ul>
</div>

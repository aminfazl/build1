<div class="activitytypes form">
<?php echo $this->Form->create('Activitytype');?>
	<fieldset>
		<legend><?php echo __('Add Activitytype'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activitytypes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Activitytypes'), array('controller' => 'activitytypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activitytype'), array('controller' => 'activitytypes', 'action' => 'add')); ?> </li>
	</ul>
</div>

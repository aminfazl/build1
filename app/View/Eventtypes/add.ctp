<div class="eventtypes form">
<?php echo $this->Form->create('Eventtype');?>
	<fieldset>
		<legend><?php echo __('Add Eventtype'); ?></legend>
	<?php
		echo $this->Form->input('eventtype_name', array('label' => 'Event Types'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

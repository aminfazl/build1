<div class="eventsClients form">
<?php echo $this->Form->create('EventsClient');?>
	<fieldset>
		<legend><?php echo __('Add Events Client'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('attended');
		echo $this->Form->input('comment');
		echo $this->Form->input('confirmed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events Clients'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

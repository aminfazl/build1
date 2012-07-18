<div class="eventsClients form">
<?php echo $this->Form->create('EventsVolunteer');?>
	<fieldset>
		<legend><?php echo __('Select volunteers and add booking'); ?></legend>
	<?php
		echo $this->Form->input('volunteer_id', array('options'=>$volunteers, 'type'=>'select', 'legend'=>false, 'multiple'=>'checkbox', 'label'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Bookings'), array('action' => 'index', $events['0']['Event']['id']));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index' )); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

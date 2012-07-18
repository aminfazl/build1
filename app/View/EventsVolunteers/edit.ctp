<div class="eventsVolunteers form">
<?php echo $this->Form->create('EventsVolunteer');?>
	<fieldset>
		<legend><?php echo __('Edit Events Volunteer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('volunteer_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventsVolunteer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EventsVolunteer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events Volunteers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

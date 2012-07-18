<div class="eventsVolunteers view">
<h2><?php  echo __('Events Volunteer');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsVolunteer['EventsVolunteer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsVolunteer['Volunteer']['first_name'], array('controller' => 'volunteers', 'action' => 'view', $eventsVolunteer['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsVolunteer['Event']['event_name'], array('controller' => 'events', 'action' => 'view', $eventsVolunteer['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attended'); ?></dt>
		<dd>
			<?php echo h($eventsVolunteer['EventsVolunteer']['attended']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($eventsVolunteer['EventsVolunteer']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmed'); ?></dt>
		<dd>
			<?php echo h($eventsVolunteer['EventsVolunteer']['confirmed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Volunteer'), array('action' => 'edit', $eventsVolunteer['EventsVolunteer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Events Volunteer'), array('action' => 'delete', $eventsVolunteer['EventsVolunteer']['id']), null, __('Are you sure you want to delete # %s?', $eventsVolunteer['EventsVolunteer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Volunteers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Volunteer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

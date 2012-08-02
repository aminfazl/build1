<div class="eventsVolunteers index">
	<h2><?php echo __($events['0']['Event']['event_name'] . ' :Booking Volunteers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('attended');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('confirmed');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($eventsVolunteers as $eventsVolunteer): ?>
	<tr>
		<td><?php echo h($eventsVolunteer['EventsVolunteer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventsVolunteer['Volunteer']['first_name'], array('controller' => 'volunteers', 'action' => 'view', $eventsVolunteer['Volunteer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventsVolunteer['Event']['event_name'], array('controller' => 'events', 'action' => 'view', $eventsVolunteer['Event']['id'])); ?>
		</td>
		<td><?php echo h($eventsVolunteer['EventsVolunteer']['attended']); ?>&nbsp;</td>
		<td><?php echo h($eventsVolunteer['EventsVolunteer']['comment']); ?>&nbsp;</td>
		<td><?php echo h($eventsVolunteer['EventsVolunteer']['confirmed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventsVolunteer['EventsVolunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventsVolunteer['EventsVolunteer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventsVolunteer['EventsVolunteer']['id'], $events['0']['Event']['id']), null, __('Are you sure you want to delete # %s?', $eventsVolunteer['EventsVolunteer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'bulk_add', $events['0']['Event']['id'] )); ?></li>
		<li><?php echo $this->Html->link(__('Attendance'), array('action' => 'attendance', $events['0']['Event']['id'] )); ?></li>
	</ul>
</div>

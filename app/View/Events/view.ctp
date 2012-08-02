<div class="events view">
<h2><?php  echo __('Event');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eventtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Eventtype']['id'], array('controller' => 'eventtypes', 'action' => 'view', $event['Eventtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Comment'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_comment']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Event Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Venue']['id'], array('controller' => 'eventvenues', 'action' => 'view', $event['Venue']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventtypes'), array('controller' => 'eventtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventtype'), array('controller' => 'eventtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients');?></h3>
	<?php if (!empty($event['Client'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Disability Id'); ?></th>
		<th><?php echo __('School Name'); ?></th>
		<th><?php echo __('Otherservices Description'); ?></th>
		<th><?php echo __('Prioritylevel Id'); ?></th>
		<th><?php echo __('Fundingsource Id'); ?></th>
		<th><?php echo __('Religion Id'); ?></th>
		<th><?php echo __('Dateaccepted'); ?></th>
		<th><?php echo __('Birthcountry Id'); ?></th>
		<th><?php echo __('Communicationchannel Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Family Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($event['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id'];?></td>
			<td><?php echo $client['first_name'];?></td>
			<td><?php echo $client['gender'];?></td>
			<td><?php echo $client['last_name'];?></td>
			<td><?php echo $client['birth_date'];?></td>
			<td><?php echo $client['disability_id'];?></td>
			<td><?php echo $client['school_name'];?></td>
			<td><?php echo $client['otherservices_description'];?></td>
			<td><?php echo $client['prioritylevel_id'];?></td>
			<td><?php echo $client['fundingsource_id'];?></td>
			<td><?php echo $client['religion_id'];?></td>
			<td><?php echo $client['dateaccepted'];?></td>
			<td><?php echo $client['birthcountry_id'];?></td>
			<td><?php echo $client['communicationchannel_id'];?></td>
			<td><?php echo $client['status_id'];?></td>
			<td><?php echo $client['family_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Timesheets');?></h3>
	<?php if (!empty($event['Timesheet'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activitytype Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Volunteer Id'); ?></th>
		<th><?php echo __('Workdate'); ?></th>
		<th><?php echo __('Fromtime'); ?></th>
		<th><?php echo __('Totime'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($event['Timesheet'] as $timesheet): ?>
		<tr>
			<td><?php echo $timesheet['id'];?></td>
			<td><?php echo $timesheet['activitytype_id'];?></td>
			<td><?php echo $timesheet['client_id'];?></td>
			<td><?php echo $timesheet['volunteer_id'];?></td>
			<td><?php echo $timesheet['workdate'];?></td>
			<td><?php echo $timesheet['fromtime'];?></td>
			<td><?php echo $timesheet['totime'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'timesheets', 'action' => 'view', $timesheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'timesheets', 'action' => 'edit', $timesheet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'timesheets', 'action' => 'delete', $timesheet['id']), null, __('Are you sure you want to delete # %s?', $timesheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="timesheets view">
<h2><?php  echo __('Timesheet');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activitytype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheet['Activitytype']['activitytype_name'], array('controller' => 'activitytypes', 'action' => 'view', $timesheet['Activitytype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheet['Client']['first_name'], array('controller' => 'clients', 'action' => 'view', $timesheet['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheet['Volunteer']['first_name'], array('controller' => 'volunteers', 'action' => 'view', $timesheet['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Workdate'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['workdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fromtime'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['fromtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Totime'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['totime']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Timesheet'), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Timesheet'), array('action' => 'delete', $timesheet['Timesheet']['id']), null, __('Are you sure you want to delete # %s?', $timesheet['Timesheet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Events');?></h3>
	<?php if (!empty($timesheet['Event'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Name'); ?></th>
		<th><?php echo __('Event Description'); ?></th>
		<th><?php echo __('Eventtype Id'); ?></th>
		<th><?php echo __('Event Comment'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($timesheet['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id'];?></td>
			<td><?php echo $event['event_name'];?></td>
			<td><?php echo $event['event_description'];?></td>
			<td><?php echo $event['eventtype_id'];?></td>
			<td><?php echo $event['event_comment'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

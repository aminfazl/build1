<div class="timesheets index">
	<h2><?php echo __('Timesheets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('activitytype_id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th><?php echo $this->Paginator->sort('workdate');?></th>
			<th><?php echo $this->Paginator->sort('fromtime');?></th>
			<th><?php echo $this->Paginator->sort('totime');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($timesheets as $timesheet): ?>
	<tr>
		<td><?php echo h($timesheet['Timesheet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timesheet['Activitytype']['activitytype_name'], array('controller' => 'activitytypes', 'action' => 'view', $timesheet['Activitytype']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($timesheet['Client']['first_name'], array('controller' => 'clients', 'action' => 'view', $timesheet['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($timesheet['Volunteer']['first_name'], array('controller' => 'volunteers', 'action' => 'view', $timesheet['Volunteer']['id'])); ?>
		</td>
		<td><?php echo h($timesheet['Timesheet']['workdate']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['fromtime']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['totime']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timesheet['Timesheet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timesheet['Timesheet']['id']), null, __('Are you sure you want to delete # %s?', $timesheet['Timesheet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Timesheet'), array('action' => 'add')); ?></li>

	</ul>
</div>

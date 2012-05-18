<div class="timesheetsEvents index">
	<h2><?php echo __('Timesheets Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('timesheet_id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($timesheetsEvents as $timesheetsEvent): ?>
	<tr>
		<td><?php echo h($timesheetsEvent['TimesheetsEvent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timesheetsEvent['Timesheet']['id'], array('controller' => 'timesheets', 'action' => 'view', $timesheetsEvent['Timesheet']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($timesheetsEvent['Event']['id'], array('controller' => 'events', 'action' => 'view', $timesheetsEvent['Event']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timesheetsEvent['TimesheetsEvent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timesheetsEvent['TimesheetsEvent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timesheetsEvent['TimesheetsEvent']['id']), null, __('Are you sure you want to delete # %s?', $timesheetsEvent['TimesheetsEvent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Timesheets Event'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

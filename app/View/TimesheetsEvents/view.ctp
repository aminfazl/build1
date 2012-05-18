<div class="timesheetsEvents view">
<h2><?php  echo __('Timesheets Event');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timesheetsEvent['TimesheetsEvent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timesheet'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheetsEvent['Timesheet']['id'], array('controller' => 'timesheets', 'action' => 'view', $timesheetsEvent['Timesheet']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheetsEvent['Event']['id'], array('controller' => 'events', 'action' => 'view', $timesheetsEvent['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Timesheets Event'), array('action' => 'edit', $timesheetsEvent['TimesheetsEvent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Timesheets Event'), array('action' => 'delete', $timesheetsEvent['TimesheetsEvent']['id']), null, __('Are you sure you want to delete # %s?', $timesheetsEvent['TimesheetsEvent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheets Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

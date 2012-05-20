<div class="activitytypes view">
<h2><?php  echo __('Activitytype');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activitytype['Activitytype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activitytype Name'); ?></dt>
		<dd>
			<?php echo h($activitytype['Activitytype']['activitytype_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activitytype'), array('action' => 'edit', $activitytype['Activitytype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activitytype'), array('action' => 'delete', $activitytype['Activitytype']['id']), null, __('Are you sure you want to delete # %s?', $activitytype['Activitytype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activitytypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activitytype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('controller' => 'timesheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Timesheets');?></h3>
	<?php if (!empty($activitytype['Timesheet'])):?>
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
		foreach ($activitytype['Timesheet'] as $timesheet): ?>
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

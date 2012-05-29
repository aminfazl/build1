<div class="employees view">
<h2><?php  echo __('Employee');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['User']['id'], array('controller' => 'users', 'action' => 'view', $employee['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matchlogs'), array('controller' => 'matchlogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matchlog'), array('controller' => 'matchlogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Matchlogs');?></h3>
	<?php if (!empty($employee['Matchlog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Volunteer Id'); ?></th>
		<th><?php echo __('Startdate'); ?></th>
		<th><?php echo __('Enddate'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Matchlog'] as $matchlog): ?>
		<tr>
			<td><?php echo $matchlog['id'];?></td>
			<td><?php echo $matchlog['client_id'];?></td>
			<td><?php echo $matchlog['volunteer_id'];?></td>
			<td><?php echo $matchlog['startdate'];?></td>
			<td><?php echo $matchlog['enddate'];?></td>
			<td><?php echo $matchlog['employee_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'matchlogs', 'action' => 'view', $matchlog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'matchlogs', 'action' => 'edit', $matchlog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'matchlogs', 'action' => 'delete', $matchlog['id']), null, __('Are you sure you want to delete # %s?', $matchlog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Matchlog'), array('controller' => 'matchlogs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

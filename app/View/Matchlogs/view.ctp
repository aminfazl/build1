<div class="matchlogs view">
<h2><?php  echo __('Matchlog');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($matchlog['Matchlog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matchlog['Client']['id'], array('controller' => 'clients', 'action' => 'view', $matchlog['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matchlog['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $matchlog['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Startdate'); ?></dt>
		<dd>
			<?php echo h($matchlog['Matchlog']['startdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enddate'); ?></dt>
		<dd>
			<?php echo h($matchlog['Matchlog']['enddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matchlog['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $matchlog['Employee']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Matchlog'), array('action' => 'edit', $matchlog['Matchlog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Matchlog'), array('action' => 'delete', $matchlog['Matchlog']['id']), null, __('Are you sure you want to delete # %s?', $matchlog['Matchlog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matchlogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matchlog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contactlogs'), array('controller' => 'contactlogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contactlog'), array('controller' => 'contactlogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contactlogs');?></h3>
	<?php if (!empty($matchlog['Contactlog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contacttype Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('ContactDate'); ?></th>
		<th><?php echo __('Matchlog Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($matchlog['Contactlog'] as $contactlog): ?>
		<tr>
			<td><?php echo $contactlog['id'];?></td>
			<td><?php echo $contactlog['contacttype_id'];?></td>
			<td><?php echo $contactlog['person_id'];?></td>
			<td><?php echo $contactlog['ContactDate'];?></td>
			<td><?php echo $contactlog['matchlog_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contactlogs', 'action' => 'view', $contactlog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contactlogs', 'action' => 'edit', $contactlog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contactlogs', 'action' => 'delete', $contactlog['id']), null, __('Are you sure you want to delete # %s?', $contactlog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contactlog'), array('controller' => 'contactlogs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

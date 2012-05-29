<div class="eventtypes view">
<h2><?php  echo __('Eventtype');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventtype['Eventtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eventtype Name'); ?></dt>
		<dd>
			<?php echo h($eventtype['Eventtype']['eventtype_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventtype'), array('action' => 'edit', $eventtype['Eventtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventtype'), array('action' => 'delete', $eventtype['Eventtype']['id']), null, __('Are you sure you want to delete # %s?', $eventtype['Eventtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events');?></h3>
	<?php if (!empty($eventtype['Event'])):?>
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
		foreach ($eventtype['Event'] as $event): ?>
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

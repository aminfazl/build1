<div class="eventvenues index">
	<h2><?php echo __('Event Venues');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('street_address');?></th>
			<th><?php echo $this->Paginator->sort('suburb');?></th>
			<th><?php echo $this->Paginator->sort('venue_name');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($eventvenues as $eventvenue): ?>
	<tr>
		<td><?php echo h($eventvenue['Eventvenue']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($eventvenue['Eventvenue']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($eventvenue['Eventvenue']['venue_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventvenue['State']['state_name'], array('controller' => 'states', 'action' => 'view', $eventvenue['State']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventvenue['Eventvenue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventvenue['Eventvenue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventvenue['Eventvenue']['id']), null, __('Are you sure you want to delete # %s?', $eventvenue['Eventvenue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event Venue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>

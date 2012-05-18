<div class="volinterestslogs index">
	<h2><?php echo __('Volinterestslogs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('interest_id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($volinterestslogs as $volinterestslog): ?>
	<tr>
		<td><?php echo h($volinterestslog['Volinterestslog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($volinterestslog['Interest']['id'], array('controller' => 'interests', 'action' => 'view', $volinterestslog['Interest']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($volinterestslog['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $volinterestslog['Volunteer']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $volinterestslog['Volinterestslog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $volinterestslog['Volinterestslog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $volinterestslog['Volinterestslog']['id']), null, __('Are you sure you want to delete # %s?', $volinterestslog['Volinterestslog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Volinterestslog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>

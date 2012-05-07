<div class="interestslogs index">
	<h2><?php echo __('Interestslogs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('interest_id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($interestslogs as $interestslog): ?>
	<tr>
		<td><?php echo h($interestslog['Interestslog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interestslog['Interest']['interest_name'], array('controller' => 'interests', 'action' => 'view', $interestslog['Interest']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($interestslog['Client']['last_name'], array('controller' => 'clients', 'action' => 'view', $interestslog['Client']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interestslog['Interestslog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interestslog['Interestslog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interestslog['Interestslog']['id']), null, __('Are you sure you want to delete # %s?', $interestslog['Interestslog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Interestslog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

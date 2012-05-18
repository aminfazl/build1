<div class="volfiltersInterests index">
	<h2><?php echo __('Volfilters Interests');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('volfilter_id');?></th>
			<th><?php echo $this->Paginator->sort('interest_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($volfiltersInterests as $volfiltersInterest): ?>
	<tr>
		<td><?php echo h($volfiltersInterest['VolfiltersInterest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($volfiltersInterest['Volfilter']['id'], array('controller' => 'volfilters', 'action' => 'view', $volfiltersInterest['Volfilter']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($volfiltersInterest['Interest']['id'], array('controller' => 'interests', 'action' => 'view', $volfiltersInterest['Interest']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $volfiltersInterest['VolfiltersInterest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $volfiltersInterest['VolfiltersInterest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $volfiltersInterest['VolfiltersInterest']['id']), null, __('Are you sure you want to delete # %s?', $volfiltersInterest['VolfiltersInterest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Volfilters Interest'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Volfilters'), array('controller' => 'volfilters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volfilter'), array('controller' => 'volfilters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

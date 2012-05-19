<div class="dhsregions index">
	<h2><?php echo __('Dhsregions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('dhsregion_name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($dhsregions as $dhsregion): ?>
	<tr>
		<td><?php echo h($dhsregion['Dhsregion']['id']); ?>&nbsp;</td>
		<td><?php echo h($dhsregion['Dhsregion']['dhsregion_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dhsregion['Dhsregion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dhsregion['Dhsregion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dhsregion['Dhsregion']['id']), null, __('Are you sure you want to delete # %s?', $dhsregion['Dhsregion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dhsregion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
	</ul>
</div>

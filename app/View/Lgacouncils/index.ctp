<div class="lgacouncils index">
	<h2><?php echo __('Lgacouncils');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('lgacouncil_name');?></th>
			<th><?php echo $this->Paginator->sort('efaregion_id');?></th>
			<th><?php echo $this->Paginator->sort('dhsregion_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($lgacouncils as $lgacouncil): ?>
	<tr>
		<td><?php echo h($lgacouncil['Lgacouncil']['id']); ?>&nbsp;</td>
		<td><?php echo h($lgacouncil['Lgacouncil']['lgacouncil_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lgacouncil['Efaregion']['id'], array('controller' => 'efaregions', 'action' => 'view', $lgacouncil['Efaregion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lgacouncil['Dhsregion']['id'], array('controller' => 'dhsregions', 'action' => 'view', $lgacouncil['Dhsregion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lgacouncil['Lgacouncil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lgacouncil['Lgacouncil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lgacouncil['Lgacouncil']['id']), null, __('Are you sure you want to delete # %s?', $lgacouncil['Lgacouncil']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Efaregions'), array('controller' => 'efaregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Efaregion'), array('controller' => 'efaregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dhsregions'), array('controller' => 'dhsregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dhsregion'), array('controller' => 'dhsregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

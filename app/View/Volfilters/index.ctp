<div class="volfilters index">
	<h2><?php echo __('Volfilters');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('volfilter_name');?></th>
			<th><?php echo $this->Paginator->sort('minage');?></th>
			<th><?php echo $this->Paginator->sort('maxage');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($volfilters as $volfilter): ?>
	<tr>
		<td><?php echo h($volfilter['Volfilter']['id']); ?>&nbsp;</td>
		<td><?php echo h($volfilter['Volfilter']['volfilter_name']); ?>&nbsp;</td>
		<td><?php echo h($volfilter['Volfilter']['minage']); ?>&nbsp;</td>
		<td><?php echo h($volfilter['Volfilter']['maxage']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $volfilter['Volfilter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $volfilter['Volfilter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $volfilter['Volfilter']['id']), null, __('Are you sure you want to delete # %s?', $volfilter['Volfilter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Volfilter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

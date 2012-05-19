<div class="incomesources index">
	<h2><?php echo __('Incomesources');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('incomesource_name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($incomesources as $incomesource): ?>
	<tr>
		<td><?php echo h($incomesource['Incomesource']['id']); ?>&nbsp;</td>
		<td><?php echo h($incomesource['Incomesource']['incomesource_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $incomesource['Incomesource']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incomesource['Incomesource']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incomesource['Incomesource']['id']), null, __('Are you sure you want to delete # %s?', $incomesource['Incomesource']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Incomesource'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

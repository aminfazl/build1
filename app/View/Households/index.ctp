<div class="households index">
	<h2><?php echo __('Households');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('suburb');?></th>
			<th><?php echo $this->Paginator->sort('street_address');?></th>
			<th><?php echo $this->Paginator->sort('postcode');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($households as $household): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($household['State']['state_name'], array('controller' => 'states', 'action' => 'view', $household['State']['id'])); ?>
		</td>
		<td><?php echo h($household['Household']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['postcode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $household['Household']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $household['Household']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $household['Household']['id']), null, __('Are you sure you want to delete # %s?', $household['Household']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Household'), array('action' => 'add')); ?></li>
	</ul>
</div>

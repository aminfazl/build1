<div class="clientsSiblings index">
	<h2><?php echo __('Clients Siblings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('sibling_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientsSiblings as $clientsSibling): ?>
	<tr>
		<td><?php echo h($clientsSibling['ClientsSibling']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientsSibling['Client']['last_name'], array('controller' => 'clients', 'action' => 'view', $clientsSibling['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientsSibling['Sibling']['first_name'], array('controller' => 'siblings', 'action' => 'view', $clientsSibling['Sibling']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientsSibling['ClientsSibling']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientsSibling['ClientsSibling']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientsSibling['ClientsSibling']['id']), null, __('Are you sure you want to delete # %s?', $clientsSibling['ClientsSibling']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Clients Sibling'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblings'), array('controller' => 'siblings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibling'), array('controller' => 'siblings', 'action' => 'add')); ?> </li>
	</ul>
</div>

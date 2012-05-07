<div class="clientstatuses index">
	<h2><?php echo __('Client Status List');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('status_name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientstatuses as $clientstatus): ?>
	<tr>
		<td><?php echo h($clientstatus['Clientstatus']['status_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientstatus['Clientstatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientstatus['Clientstatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientstatus['Clientstatus']['id']), null, __('Are you sure you want to delete # %s?', $clientstatus['Clientstatus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client Status'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Client List'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
	</ul>
</div>

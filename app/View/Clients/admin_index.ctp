<div class="clients index">
	<h2><?php echo __('Clients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('clientstatus_id');?></th>
			<th><?php echo $this->Paginator->sort('communicationchannel_id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('household_id');?></th>
			<th><?php echo $this->Paginator->sort('birthcountry_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Clientstatus']['status_name'], array('controller' => 'clientstatuses', 'action' => 'view', $client['Clientstatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($client['Communicationchannel']['communicationchannel_name'], array('controller' => 'communicationchannels', 'action' => 'view', $client['Communicationchannel']['id'])); ?>
		</td>
		<td><?php echo h($client['Client']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['gender']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['birth_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Household']['id'], array('controller' => 'households', 'action' => 'view', $client['Household']['id'])); ?>
		</td>
		<td><?php echo h($client['Client']['birthcountry_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientstatuses'), array('controller' => 'clientstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientstatus'), array('controller' => 'clientstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communicationchannels'), array('controller' => 'communicationchannels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Communicationchannel'), array('controller' => 'communicationchannels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Birthcountry'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interestslogs'), array('controller' => 'interestslogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interestslog'), array('controller' => 'interestslogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblinks'), array('controller' => 'siblinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siblink'), array('controller' => 'siblinks', 'action' => 'add')); ?> </li>
	</ul>
</div>

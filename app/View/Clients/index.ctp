<div class="clients index">
	<h2><?php echo __('Clients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name', 'Client Name');?></th>
			<th><?php echo $this->Paginator->sort('gender','Gender');?></th>
      <th><?php echo $this->Paginator->sort('clientstatus_id', 'Client Status');?></th>
			<th><?php echo $this->Paginator->sort('communicationchannel_id', 'Communication Channel');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['gender']); ?>&nbsp;</td>
    <td>
			<?php echo $this->Html->link($client['Clientstatus']['status_name'], array('controller' => 'clientstatuses', 'action' => 'view', $client['Clientstatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($client['Communicationchannel']['communicationchannel_name'], array('controller' => 'communicationchannels', 'action' => 'view', $client['Communicationchannel']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
		</td>
    	<td><?php echo h($client['Client']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['birth_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Family']['Primarycarer']['street_address'], array('controller' => 'carers', 'action' => 'view', $client['Family']['Primarycarer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($client['Birthcountry']['country_name'], array('controller' => 'countries', 'action' => 'view', $client['Birthcountry']['id'])); ?>
		</td> -->
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
	</ul>
</div>

<div class="eventsClients index">
	<h2><?php echo __($events['0']['Event']['event_name'] . ' :Clients to be contacted');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo "Phone";?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($eventsClients as $eventsClient): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($eventsClient['Client']['first_name'] . ' ' . $eventsClient['Client']['last_name'], array('controller' => 'clients', 'action' => 'view', $eventsClient['Client']['id'])); ?>
		</td>
		<td><?php echo h($eventsClient['Client']['phone']); ?>&nbsp;</td>
		<td><?php echo h($eventsClient['Primarycarer']['street_address'] . ' ' . $eventsClient['Primarycarer']['suburb'] . ' ' . $eventsClient['Primarycarer']['postcode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventsClient['EventsClient']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'bulk_add', $events['0']['Event']['id'] )); ?></li>
		<li><?php echo $this->Html->link(__('Attendance'), array('action' => 'attendance', $events['0']['Event']['id'] )); ?></li>
        <li><?php echo $this->Html->link(__('Clients to contact'), array('action' => 'contactclients', $events['0']['Event']['id'] )); ?></li>
	</ul>
</div>

<div class="events index">
    
    <?php
echo $this->Form->create('Event', array('action'=>'/index'));
?><fieldset><legend><?php __('Filter');?></legend><?
echo $this -> Form->input('event_name');
//echo $this -> Form->input('event_description');
?></fieldset><?
echo $this -> Form->end('Search');
?>
    
	<h2><?php echo __('Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('event_name');?></th>
			<th><?php echo $this->Paginator->sort('Event Types');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($events as $event): ?>
	<tr>

		<td><?php echo h($event['Event']['event_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Eventtype']['id'], array('controller' => 'eventtypes', 'action' => 'view', $event['Eventtype']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
	
	</ul>
</div>

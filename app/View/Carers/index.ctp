<div class="carers index">
	<h2><?php echo __('Carers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('incomesource_id');?></th>
			<th><?php echo $this->Paginator->sort('postcode');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('suburb');?></th>
			<th><?php echo $this->Paginator->sort('street_address');?></th>
			<th><?php echo $this->Paginator->sort('lgacouncil_id');?></th>
			<th><?php echo $this->Paginator->sort('language_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($carers as $carer): ?>
	<tr>
		<td><?php echo h($carer['Carer']['id']); ?>&nbsp;</td>
		<td><?php echo h($carer['Carer']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($carer['Carer']['gender']); ?>&nbsp;</td>
		<td><?php echo h($carer['Carer']['birth_date']); ?>&nbsp;</td>
		<td><?php echo h($carer['Carer']['first_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carer['Incomesource']['id'], array('controller' => 'incomesources', 'action' => 'view', $carer['Incomesource']['id'])); ?>
		</td>
		<td><?php echo h($carer['Carer']['postcode']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carer['State']['id'], array('controller' => 'states', 'action' => 'view', $carer['State']['id'])); ?>
		</td>
		<td><?php echo h($carer['Carer']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($carer['Carer']['street_address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carer['Lgacouncil']['id'], array('controller' => 'lgacouncils', 'action' => 'view', $carer['Lgacouncil']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($carer['Language']['id'], array('controller' => 'languages', 'action' => 'view', $carer['Language']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $carer['Carer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $carer['Carer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $carer['Carer']['id']), null, __('Are you sure you want to delete # %s?', $carer['Carer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Carer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Incomesources'), array('controller' => 'incomesources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incomesource'), array('controller' => 'incomesources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>

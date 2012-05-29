<div class="siblings index">
	<h2><?php echo __('Siblings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('birth_date');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('family_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($siblings as $sibling): ?>
	<tr>
		<td><?php echo h($sibling['Sibling']['id']); ?>&nbsp;</td>
		<td><?php echo h($sibling['Sibling']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($sibling['Sibling']['gender']); ?>&nbsp;</td>
		<td><?php echo h($sibling['Sibling']['birth_date'], array('dateFormat' => 'DMY')); ?>&nbsp;</td>
		<td><?php echo h($sibling['Sibling']['first_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sibling['Family']['id'], array('controller' => 'families', 'action' => 'view', $sibling['Family']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sibling['Sibling']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sibling['Sibling']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sibling['Sibling']['id']), null, __('Are you sure you want to delete # %s?', $sibling['Sibling']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sibling'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
	</ul>
</div>

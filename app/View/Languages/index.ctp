<div class="languages index">
	<h2><?php echo __('Languages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('language_name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($languages as $language): ?>
	<tr>
		<td><?php echo h($language['Language']['id']); ?>&nbsp;</td>
		<td><?php echo h($language['Language']['language_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $language['Language']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $language['Language']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $language['Language']['id']), null, __('Are you sure you want to delete # %s?', $language['Language']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Language'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

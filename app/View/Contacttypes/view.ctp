<div class="contacttypes view">
<h2><?php  echo __('Contacttype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contacttype['Contacttype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacttype Name'); ?></dt>
		<dd>
			<?php echo h($contacttype['Contacttype']['contacttype_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contacttype'), array('action' => 'edit', $contacttype['Contacttype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contacttype'), array('action' => 'delete', $contacttype['Contacttype']['id']), null, __('Are you sure you want to delete # %s?', $contacttype['Contacttype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacttypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contacttype'), array('action' => 'add')); ?> </li>

	</ul>
</div>

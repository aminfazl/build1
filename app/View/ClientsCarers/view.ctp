<div class="clientsCarers view">
<h2><?php  echo __('Clients Carer');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientsCarer['ClientsCarer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carer Id'); ?></dt>
		<dd>
			<?php echo h($clientsCarer['ClientsCarer']['carer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Id'); ?></dt>
		<dd>
			<?php echo h($clientsCarer['ClientsCarer']['client_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clients Carer'), array('action' => 'edit', $clientsCarer['ClientsCarer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clients Carer'), array('action' => 'delete', $clientsCarer['ClientsCarer']['id']), null, __('Are you sure you want to delete # %s?', $clientsCarer['ClientsCarer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients Carers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients Carer'), array('action' => 'add')); ?> </li>
	</ul>
</div>

<div class="clientstatuses form">
<?php echo $this->Form->create('Clientstatus');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Clientstatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clientstatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clientstatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientstatuses'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

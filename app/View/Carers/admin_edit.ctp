<div class="carers form">
<?php echo $this->Form->create('Carer');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Carer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('first_name');
		echo $this->Form->input('household_id');
		echo $this->Form->input('Client');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Carer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Carer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

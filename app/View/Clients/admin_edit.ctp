<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clientstatus_id');
		echo $this->Form->input('communicationchannel_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('last_name');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('household_id');
		echo $this->Form->input('birthcountry_id');
		echo $this->Form->input('Carer');
		echo $this->Form->input('Siblink');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clientstatuses'), array('controller' => 'clientstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientstatus'), array('controller' => 'clientstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communicationchannels'), array('controller' => 'communicationchannels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Communicationchannel'), array('controller' => 'communicationchannels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Birthcountry'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interestslogs'), array('controller' => 'interestslogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interestslog'), array('controller' => 'interestslogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblinks'), array('controller' => 'siblinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siblink'), array('controller' => 'siblinks', 'action' => 'add')); ?> </li>
	</ul>
</div>

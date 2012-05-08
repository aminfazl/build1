<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('birth_date', array('dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
		echo $this->Form->input('birthcountry_id', array('label'=>'Birth Country'));
		echo $this->Form->input('clientstatus_id', array('label' => 'Client Status'));
		echo $this->Form->input('communicationchannel_id', array('label' => 'Communication Channel'));
		echo $this->Form->input('household_id');
		echo $this->Form->input('Carer');
		echo $this->Form->input('Sibling');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Client List'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Client Status'), array('controller' => 'clientstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Communication Channels'), array('controller' => 'communicationchannels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
	</ul>
</div>

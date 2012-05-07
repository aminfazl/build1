<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clientstatus_id');
		echo $this->Form->input('communicationchannel_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'M','F'=>'F')));
		echo $this->Form->input('last_name');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('household_id');
		echo $this->Form->input('birthcountry_id');
		echo $this->Form->input('Carer');
		echo $this->Form->input('Sibling');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
	</ul>
</div>

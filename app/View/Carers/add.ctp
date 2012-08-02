<div class="carers form">
<?php echo $this->Form->create('Carer');?>
	<fieldset>
		<legend><?php echo __('Add Carer'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('first_name');
		echo $this->Form->input('incomesource_id');
		echo $this->Form->input('postcode');
		echo $this->Form->input('state_id');
		echo $this->Form->input('suburb');
		echo $this->Form->input('street_address');
		echo $this->Form->input('lgacouncil_id');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Carers'), array('action' => 'index'));?></li>
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

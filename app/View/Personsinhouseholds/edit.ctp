<div class="personsinhouseholds form">
<?php echo $this->Form->create('Personsinhousehold');?>
	<fieldset>
		<legend><?php echo __('Edit Personsinhousehold'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('household_id');
		echo $this->Form->input('person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Personsinhousehold.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Personsinhousehold.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personsinhouseholds'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>

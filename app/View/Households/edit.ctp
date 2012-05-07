<div class="households form">
<?php echo $this->Form->create('Household');?>
	<fieldset>
		<legend><?php echo __('Edit Household'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('suburb');
		echo $this->Form->input('street_address');
		echo $this->Form->input('postcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Household.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Household.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Households'), array('action' => 'index'));?></li>
	</ul>
</div>

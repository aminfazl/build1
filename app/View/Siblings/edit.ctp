<div class="siblings form">
<?php echo $this->Form->create('Sibling');?>
	<fieldset>
		<legend><?php echo __('Edit Sibling'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('first_name');
		echo $this->Form->input('family_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sibling.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sibling.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Siblings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
	</ul>
</div>

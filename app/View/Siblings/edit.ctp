<div class="siblings form">
<?php echo $this->Form->create('Sibling');?>
	<fieldset>
		<legend><?php echo __('Edit Sibling'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('birth_date', array('dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
		echo $this->Form->input('first_name');
		echo $this->Form->input('household_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sibling.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sibling.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Sibling List'), array('action' => 'index'));?></li>
	</ul>
</div>

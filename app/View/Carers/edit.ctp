<div class="carers form">
<?php echo $this->Form->create('Carer');?>
	<fieldset>
		<legend><?php echo __('Edit Carer'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('birth_date', array('dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')-18));
		echo $this->Form->input('household_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Carer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Carer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Carers List'), array('action' => 'index'));?></li>
        <li><?php echo $this->Html->link(__('New Carer'), array('action' => 'add')); ?></li>
	</ul>
</div>

<div class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
		<legend><?php echo __('Edit Volunteer'); ?></legend>
	<?php
		echo $this->Form->input('id');	
		echo $this->Form->input('User.first_name');
		echo $this->Form->input('User.last_name');
		echo $this->Form->input('User.gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('User.birth_date',array('dateFormat' => 'DMY','minYear' => date('Y') - 70,'maxYear' => date('Y') -18));
		echo $this->Form->input('User.street_address');
		echo $this->Form->input('User.suburb', array('class' => 'suburb'));
		echo $this->Form->input('User.state_id');
		echo $this->Form->input('User.postcode', array('class' => 'postcode'));
		echo $this->Form->input('volunteerstatus_id');
		echo $this->Form->input('User.communicationchannel_id');
        echo $this->Form->hidden('User.id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Volunteer.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Volunteer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('action' => 'add')); ?></li>
	</ul>
</div>

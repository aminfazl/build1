<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php 
		if($user_id == null	)
			echo ('Contact');
		else{
			echo ('Add Contact for User Id: ');echo ($user_id);}
		 ?></legend>
	<?php
		echo $this->Form->input('staff_id');
		echo $this->Form->input('user_id', array('value' => $user_id));
		echo $this->Form->input('contacttype_id');
		echo $this->Form->input('description', array('class' => 'txtArea', 'cols' => '2'));	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>

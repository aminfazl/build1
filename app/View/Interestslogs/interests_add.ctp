<div class="interestslogs form">
<?php echo $this->Form->create('Interestslog');?>
	<fieldset>
		<legend><?php echo __('Add Interestslog'); ?></legend>
	<?php
		echo $this->Form->input('interest_id', array('multiple'=>'checkbox','options'=>$interests));
		echo $this->Form->input('client_id', array('value' => $client_id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Interestslogs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

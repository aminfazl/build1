<div class="interestslogs form">
<?php echo $this->Form->create('Interestslog');?>
	<fieldset>
		<legend><?php echo __('Edit Interestslog'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('interest_id');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Interestslog.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Interestslog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Interestslogs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

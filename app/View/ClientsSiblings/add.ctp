<div class="clientsSiblings form">
<?php echo $this->Form->create('ClientsSibling');?>
	<fieldset>
		<legend><?php echo __('Add Clients Sibling'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('sibling_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients Siblings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblings'), array('controller' => 'siblings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibling'), array('controller' => 'siblings', 'action' => 'add')); ?> </li>
	</ul>
</div>

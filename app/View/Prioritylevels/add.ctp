<div class="prioritylevels form">
<?php echo $this->Form->create('Prioritylevel');?>
	<fieldset>
		<legend><?php echo __('Add Prioritylevel'); ?></legend>
	<?php
		echo $this->Form->input('prioritylevel_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prioritylevels'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

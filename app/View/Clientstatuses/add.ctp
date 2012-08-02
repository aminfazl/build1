<div class="clientstatuses form">
<?php echo $this->Form->create('Clientstatus');?>
	<fieldset>
		<legend><?php echo __('Add Client Status'); ?></legend>
	<?php
		echo $this->Form->input('status_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Client Status List'), array('action' => 'index'));?></li>
		<!-- <li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li> -->
	</ul>
</div>

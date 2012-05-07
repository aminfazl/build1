<div class="clientsCarers form">
<?php echo $this->Form->create('ClientsCarer');?>
	<fieldset>
		<legend><?php echo __('Add Clients Carer'); ?></legend>
	<?php
		echo $this->Form->input('carer_id');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients Carers'), array('action' => 'index'));?></li>
	</ul>
</div>

<div class="incomesources form">
<?php echo $this->Form->create('Incomesource');?>
	<fieldset>
		<legend><?php echo __('Add Incomesource'); ?></legend>
	<?php
		echo $this->Form->input('incomesource_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incomesources'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

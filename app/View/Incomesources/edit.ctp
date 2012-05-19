<div class="incomesources form">
<?php echo $this->Form->create('Incomesource');?>
	<fieldset>
		<legend><?php echo __('Edit Incomesource'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('incomesource_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Incomesource.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Incomesource.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Incomesources'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="disabilities form">
<?php echo $this->Form->create('Disability');?>
	<fieldset>
		<legend><?php echo __('Edit Disability'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('disability_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Disability.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Disability.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disabilities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="interests form">
<?php echo $this->Form->create('Interest');?>
	<fieldset>
		<legend><?php echo __('Edit Interest'); ?></legend>
	<?php
		echo $this->Form->input('interest_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Interest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Interest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Interest List'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Filter'), array('controller' => 'filters', 'action' => 'add')); ?> </li>
	</ul>
</div>

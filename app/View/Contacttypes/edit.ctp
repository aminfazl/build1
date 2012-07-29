<div class="contacttypes form">
<?php echo $this->Form->create('Contacttype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contacttype_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contacttype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contacttype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact types'), array('action' => 'index')); ?></li>
	</ul>
</div>

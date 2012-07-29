<div class="contacttypes form">
<?php echo $this->Form->create('Contacttype'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact type'); ?></legend>
	<?php
		echo $this->Form->input('contacttype_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contact types'), array('action' => 'index')); ?></li>
	</ul>
</div>

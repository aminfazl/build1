	<fieldset>
		<legend><?php echo __('Add Disability'); ?></legend>
	<?php
		echo $this->Form->create('Disability');
		echo $this->Form->input('disability_name', array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
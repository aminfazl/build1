	<fieldset>
		<legend><?php echo __('Add Volunteer Status'); ?></legend>
	<?php
		echo $this->Form->create('Volunteerstatus');
		echo $this->Form->input('volunteerstatus_name',array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
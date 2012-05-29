	<fieldset>
		<legend><?php echo __('Add Country'); ?></legend>
	<?php
		echo $this->Form->create('Country');
		echo $this->Form->input('country_name');
	?>
	</fieldset>
<?php echo $this->Form->end();?>



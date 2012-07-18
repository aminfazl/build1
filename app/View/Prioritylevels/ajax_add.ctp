	<fieldset>
		<legend><?php echo __('Add Priority level'); ?></legend>
	<?php
		echo $this->Form->create('Prioritylevel');
		echo $this->Form->input('prioritylevel_name', array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
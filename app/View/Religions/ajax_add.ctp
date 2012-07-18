	<fieldset>
		<legend><?php echo __('Add Religion'); ?></legend>
	<?php
		echo $this->Form->create('Religion');
		echo $this->Form->input('religion_name', array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
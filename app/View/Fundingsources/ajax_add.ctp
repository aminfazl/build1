	<fieldset>
		<legend><?php echo __('Add Funding Source'); ?></legend>
	<?php
		echo $this->Form->create('Fundingsource');
		echo $this->Form->input('fundingsource_name', array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
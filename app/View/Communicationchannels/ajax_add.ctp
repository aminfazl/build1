	<fieldset>
		<legend><?php echo __('Add Communication Channel'); ?></legend>
	<?php
		echo $this->Form->create('Communicationchannel');
		echo $this->Form->input('communicationchannel_name',array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
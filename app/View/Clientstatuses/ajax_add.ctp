	<fieldset>
		<legend><?php echo __('Add Client Status'); ?></legend>
	<?php
		echo $this->Form->create('Clientstatus');
		echo $this->Form->input('status_name',array('div'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end();?>



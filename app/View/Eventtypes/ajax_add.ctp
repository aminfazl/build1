	<fieldset>
		<legend><?php echo __('Add Eventtype'); ?></legend>
	<?php
		echo $this->Form->create('Eventtype');
		echo $this->Form->input('eventtype_name',array('div'=>false,'label' => 'Event Types'));
	?>
	</fieldset>
<?php echo $this->Form->end();?>
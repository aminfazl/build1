<div class="eventsClients form">
<?php echo $this->Form->create('EventsVolunteer');?>
	<fieldset>
		<legend><?php echo __('Confirm booking'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comment');
		echo $this->Form->input('confirmed', array('type'=>'hidden', 'value'=>'1'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

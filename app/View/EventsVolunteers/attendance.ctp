<div class="eventsClients form">
<?php echo $this->Form->create('EventsVolunteer');?>
	<fieldset>
		<legend><?php echo __('Select volunteers that attended or unselect any other volunteers'); ?></legend>
	<?php
		echo $this->Form->input('volunteer_id', array('options'=>$volunteers, 'type'=>'select', 'legend'=>false, 'multiple'=>'checkbox', 'label'=>false, 'selected'=>$selected));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Bookings'), array('action' => 'index', $event_id));?></li>
	</ul>
</div>

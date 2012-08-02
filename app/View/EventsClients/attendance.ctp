<div class="eventsClients form">
<?php echo $this->Form->create('EventsClient');?>
	<fieldset>
		<legend><?php echo __('Select clients that attended or unselect any other clients'); ?></legend>
	<?php
		echo $this->Form->input('client_id', array('options'=>$clients, 'legend'=>false, 'multiple'=>'checkbox', 'label'=>false, 'selected'=>$selected));
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

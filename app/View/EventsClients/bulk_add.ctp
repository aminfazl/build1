<div class="eventsClients form">
<?php echo $this->Form->create('EventsClient');?>
	<fieldset>
		<legend><?php echo __('Select clients and add booking'); ?></legend>
        <?php if (count($clients) > 0)
        {
        ?>
	<?php
		echo $this->Form->input('client_id', array('options'=>$clients, 'type'=>'select', 'legend'=>false, 'multiple'=>'checkbox', 'label'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
 <?php 
 		}
        
        else
        	echo "No additional clients can be invited to this event"
        ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Bookings'), array('action' => 'index', $events['0']['Event']['id']));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

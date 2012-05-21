<div class="events form">


<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
        
        
        echo $this->Form->input('event_name');
        echo $this->Form->input('event_description', array('class' => 'txtArea', 'cols' => '2'));
		echo $this->Form->input('eventtype_id');
		echo $this->Form->input('event_comment', array('class' => 'txtArea', 'cols' => '2'));
		echo $this->Form->input('event_description');
		echo $this->Form->input('eventtype_id', array('label' => 'Event')  );
		echo $this->Form->input('event_comment');

		echo $this->Form->input('Client');
		echo $this->Form->input('Timesheet');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index'));?></li>
		
	</ul>
</div>

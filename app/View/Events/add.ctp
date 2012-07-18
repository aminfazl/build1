<div id="addForm" class="events form">


    
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
        
        
        echo $this->Form->input('event_name');
        echo $this->Form->input('event_description', array('class' => 'txtArea', 'cols' => '2'));?>
	
        <?php
		echo $this->Form->input('eventtype_id', array('label' => 'Event Type', 'after'=>$this->Js->link('New', array('controller'=>'Eventtypes', 'action'=>'add' ), array('class'=>'newEventtype' ))));?>
        <div class="eventtypeForm" id="eventtypeForm">
        	<div class="eventtypeInputs" id="eventtypeInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Eventtypes'), array('class'=>'eventtypeSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Eventtypes'), array('class'=>'eventtypeCancel' ));
	?>
	</div>
	</fieldset>
	</div>
		<?php echo $this->Form->input('event_comment', array('class' => 'txtArea', 'cols' => '2'));
		echo $this->Form->input('event_date');?>

         <?php
		echo $this->Form->input('venue_id');?>

	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index'));?></li>
		
	</ul>
</div>

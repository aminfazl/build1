<div id="addForm" class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
		<legend><?php echo __('Add Volunteer'); ?></legend>
	<?php
		echo $this->Form->input('User.first_name');
		echo $this->Form->input('User.last_name');
		echo $this->Form->input('User.gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('User.birth_date',array('dateFormat' => 'DMY','minYear' => date('Y') - 70,'maxYear' => date('Y') -18));
		echo $this->Form->input('User.street_address');
		echo $this->Form->input('User.suburb', array('class' => 'suburb'));
		echo $this->Form->input('User.state_id');
		echo $this->Form->input('User.postcode', array('class' => 'postcode'));
        
		echo $this->Form->input('volunteerstatus_id', array('label' => 'Volunteer Status'));?>
		<?php
		echo $this->Form->input('User.communicationchannel_id', array('label' => 'Communication Channel', 'after'=>$this->Js->link('New', array('controller'=>'Communicationchannels', 'action'=>'add' ), array('class'=>'newChannel' ))));?>
        <div class="channelForm" id="chanelForm">
        	<div class="channelInputs" id="chanelInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Communicationchannels'), array('class'=>'channelSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Communicationchannels'), array('class'=>'channelCancel' ));
	?>
	</div>
	</fieldset>
	</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Volunteers'), array('action' => 'index'));?></li>
	</ul>
</div>

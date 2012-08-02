<div id="addForm" class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('User.first_name');
		echo $this->Form->input('User.last_name');
		echo $this->Form->input('User.gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('User.birth_date', array('selected'=>array('year'=>'2000'),'dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
        echo $this->Form->input('User.street_address');		
		echo $this->Form->input('User.suburb');
		echo $this->Form->input('User.state_id');
		echo $this->Form->input('User.postcode');		
        echo $this->Form->input('User.email');
        echo $this->Form->input('User.phone');
        
		
		echo $this->Form->input('birthcountry_id', array('default'=>'13','label'=>'Birth Country', 'after'=>$this->Js->link('New', array('controller'=>'countries', 'action'=>'add' ), array('class'=>'linkNew' ))));?>
        <div class="ajaxForm" id="countryForm">
        	<div class="Inputs" id="countryInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'countries'), array('class'=>'linkSubmit' ));
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'countries'), array('class'=>'linkCancel' ));
	?>
	</div>
	</fieldset>
	</div>
	
       <?php
		echo $this->Form->input('status_id', array('label' => 'Client Status', 'after'=>$this->Js->link('New', array('controller'=>'Clientstatuses', 'action'=>'add' ), array('class'=>'newStatus' ))));?>
        <div class="statusForm" id="statusForm">
        	<div class="statusInputs" id="statusInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Clientstatuses'), array('class'=>'statusSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Clientstatuses'), array('class'=>'statusCancel' ));
	?>
	</div>
	</fieldset>
	</div>
	
	
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
	
	
	<?php
		echo $this->Form->input('disability_id', array('label' => 'Disability', 'after'=>$this->Js->link('New', array('controller'=>'Disabilities', 'action'=>'add' ), array('class'=>'newDisability' ))));?>
        <div class="disabilityForm" id="disabilityForm">
        	<div class="disabilityInputs" id="disabilityInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Disabilities'), array('class'=>'disabilitySubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Disabilities'), array('class'=>'disabilityCancel' ));
	?>
	</div>
	</fieldset>
	</div>
	
        <?php
		
		echo $this->Form->input('school_name',  array('label' => 'School name'));
		echo $this->Form->input('otherservices_description');?>
        
        <?php
		echo $this->Form->input('prioritylevel_id', array('label' => 'Priority Level', 'after'=>$this->Js->link('New', array('controller'=>'Prioritylevels', 'action'=>'add' ), array('class'=>'newPrioritylevel' ))));?>
        <div class="prioritylevelForm" id="prioritylevelForm">
        	<div class="prioritylevelInputs" id="prioritylevelInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Prioritylevels'), array('class'=>'prioritylevelSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Prioritylevels'), array('class'=>'prioritylevelCancel' ));
	?>
	</div>
	</fieldset>
	</div>
    
	<?php
		echo $this->Form->input('fundingsource_id', array('label' => 'Funding Source', 'after'=>$this->Js->link('New', array('controller'=>'Fundingsources', 'action'=>'add' ), array('class'=>'newFundingsource' ))));?>
        <div class="fundingsourceForm" id="fundingsourceForm">
        	<div class="fundingsourceInputs" id="fundingsourceInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Fundingsources'), array('class'=>'fundingsourceSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Fundingsources'), array('class'=>'fundingsourceCancel' ));
	?>
	</div>
	</fieldset>
	</div>
    
    <?php
		echo $this->Form->input('religion_id', array('label' => 'Religion', 'after'=>$this->Js->link('New', array('controller'=>'Religions', 'action'=>'add' ), array('class'=>'newReligion' ))));?>
        <div class="religionForm" id="religionForm">
        	<div class="religionInputs" id="religionInputs">
            </div>
        <fieldset>
	<div class="submits">
    <?php 
	echo $this->Js->Link('Submit', array('action'=>'add', 'controller'=>'Religions'), array('class'=>'religionSubmit'));
	echo ' ';
	echo $this->Js->Link('Cancel', array('action'=>'add', 'controller'=>'Religions'), array('class'=>'religionCancel' ));
	?>
	</div>
	</fieldset>
	</div>
		

        <?php
		echo $this->Form->input('dateaccepted', array('label' => 'Date Accepted','dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
		echo $this->Form->input('Search.primarycarer_search',  array('id'=>'searchTextPrimary','label' => 'Primary Carer', 'div'=>false, 'size'=>20, 'after'=>$this->Js->link('Search', array('controller'=>'carers', 'action'=>'search' ), array('id'=>'linkSearchPrimary' )) . '  '. $this->Js->link('New', array('controller'=>'carers', 'action'=>'ajax_add' ), array('id'=>'linkNewCarerPrimary'))));
		echo $this->Form->input('Search.secondarycarer_search',  array('id'=>'searchTextSecondary','label' => 'Secondary Carer', 'div'=>false, 'size'=>20, 'after'=>$this->Js->link('Search', array('controller'=>'carers', 'action'=>'search' ), array('id'=>'linkSearchSecondary' )) . '  '. $this->Js->link('New', array('controller'=>'carers', 'action'=>'ajax_add' ), array('id'=>'linkNewCarerSecondary'))));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Client List'), array('action' => 'index'));?></li>
        <li><?php echo $this->Html->link(__('Client Status'), array('controller' => 'clientstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Disabilities'), array('controller' => 'disabilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Priority levels'), array('controller' => 'prioritylevels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Funding sources'), array('controller' => 'fundingsources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Communication channels'), array('controller' => 'communicationchannels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
	</ul>
</div>

<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input('birth_date', array('dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
		echo $this->Form->input('birthcountry_id', array('label'=>'Birth Country', 'after'=>$this->Js->link('New', array('controller'=>'countries', 'action'=>'add' ), array('class'=>'linkNew' ))));?>
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
		echo $this->Form->input('status_id', array('label' => 'Client Status'));
		echo $this->Form->input('communicationchannel_id', array('label' => 'Communication Channel'));
		echo $this->Form->input('disability_id',  array('label' => 'Disability'));
		echo $this->Form->input('school_name',  array('label' => 'School name'));
		echo $this->Form->input('otherservices_description');
		echo $this->Form->input('prioritylevel_id',  array('label' => 'Priority Level'));
		echo $this->Form->input('fundingsource_id',  array('label' => 'Funding Source'));
		echo $this->Form->input('religion_id',  array('label' => 'Religion'));
		echo $this->Form->input('dateaccepted', array('label' => 'Date Accepted','dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));
		
		Echo "Primary Carer";
		echo $this->Form->input('Family.Primarycarer.last_name');
		echo $this->Form->input('Family.Primarycarer.gender');
		echo $this->Form->input('Family.Primarycarer.birth_date');
		echo $this->Form->input('Family.Primarycarer.first_name');
		echo $this->Form->input('Family.Primarycarer.incomesource_id');
		echo $this->Form->input('Family.Primarycarer.postcode');
		echo $this->Form->input('Family.Primarycarer.state_id');
		echo $this->Form->input('Family.Primarycarer.suburb');
		echo $this->Form->input('Family.Primarycarer.street_address');
		echo $this->Form->input('Family.Primarycarer.lgacouncil_id');
		echo $this->Form->input('Family.Primarycarer.language_id');
		
		Echo "Secondary Carer";
		echo $this->Form->input('Family.Secondarycarer.last_name');
		echo $this->Form->input('Family.Secondarycarer.gender');
		echo $this->Form->input('Family.Secondarycarer.birth_date');
		echo $this->Form->input('Family.Secondarycarer.first_name');
		echo $this->Form->input('Family.Secondarycarer.incomesource_id');
		echo $this->Form->input('Family.Secondarycarer.postcode');
		echo $this->Form->input('Family.Secondarycarer.state_id');
		echo $this->Form->input('Family.Secondarycarer.suburb');
		echo $this->Form->input('Family.Secondarycarer.street_address');
		echo $this->Form->input('Family.Secondarycarer.lgacouncil_id');
		echo $this->Form->input('Family.Secondarycarer.language_id');
		
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

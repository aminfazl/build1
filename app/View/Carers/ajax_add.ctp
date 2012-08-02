	<fieldset>
		<legend><?php echo __('Add Carer'); ?></legend>
	<?php
		echo $this->Form->input($this->data['formprefix'] . 'User.first_name');
		echo $this->Form->input($this->data['formprefix'] . 'User.last_name');
		echo $this->Form->input($this->data['formprefix'] . 'User.gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input($this->data['formprefix'] . 'User.birth_date', array('type'=>'date', 'dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));		
		echo $this->Form->input($this->data['formprefix'] . 'User.street_address');		
		echo $this->Form->input($this->data['formprefix'] . 'User.suburb');
		echo $this->Form->input($this->data['formprefix'] . 'User.state_id');
		echo $this->Form->input($this->data['formprefix'] . 'User.postcode');	
        echo $this->Form->input($this->data['formprefix'] . 'User.Phone');
		echo $this->Form->input($this->data['formprefix'] . 'User.Email');	
       echo $this->Form->input($this->data['formprefix'] . 'User.communicationchannel_id');		
		echo $this->Form->input($this->data['formprefix'] . 'Carer.lgacouncil_id');
		echo $this->Form->input($this->data['formprefix'] . 'Carer.incomesource_id');
		echo $this->Form->input($this->data['formprefix'] . 'Carer.language_id');
	?>
	</fieldset>


	<fieldset>
		<legend><?php echo __('Add Carer'); ?></legend>
	<?php
		echo $this->Form->input($this->data['formprefix'] . 'first_name');
		echo $this->Form->input($this->data['formprefix'] . 'last_name');
		echo $this->Form->input($this->data['formprefix'] . 'gender',array('label' => 'Gender', 'type' => 'select', 'options' => array('M'=>'Male','F'=>'Female')));
		echo $this->Form->input($this->data['formprefix'] . 'birth_date', array('type'=>'date', 'dateFormat' => 'DMY','minYear' => date('Y') - 50,'maxYear' => date('Y')));		
		echo $this->Form->input($this->data['formprefix'] . 'street_address');		
		echo $this->Form->input($this->data['formprefix'] . 'suburb');
		echo $this->Form->input($this->data['formprefix'] . 'state_id');
		echo $this->Form->input($this->data['formprefix'] . 'postcode');		
		echo $this->Form->input($this->data['formprefix'] . 'lgacouncil_id');
		echo $this->Form->input($this->data['formprefix'] . 'incomesource_id');
		echo $this->Form->input($this->data['formprefix'] . 'language_id');
	?>
	</fieldset>


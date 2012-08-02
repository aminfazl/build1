<div class="timesheets form">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php echo __('Add Timesheet'); ?></legend>
	<?php
		echo $this->Form->input('activitytype_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('workdate');
		echo $this->Form->input('fromtime');
		echo $this->Form->input('totime');
		echo $this->Form->input('Event');



/*
		//To create ifPayable field: (Yes/No - 1/2)
		 echo $this->Form->input('ifPayable', Array(
             'empty'=>('Select if Payable'),
             'label'=>'If Payable',              
             'options'=>Array('1'=>'Yes','2'=>'No'),
             )
          ); 


		 //To create Visit Type field: (Short/Long - 10/12)
  		echo $this->Form->input('visitType', Array( //Attribute Name
             'empty'=>('Select Visit Type'), //When Empty, the field will show "Select Visit Type"
             'label'=>'Visit Type',      //Label for the field        
             'options'=>Array('10'=>'Short Visit','12'=>'Long Visit'), //What options the user select from (Short or Long Visit) & what is saved to the database (10 or 12)
          		) //
          );

*/


	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Timesheets'), array('action' => 'index'));?></li>

	</ul>
</div>

<div class="timesheets view">
<?php echo $this->Form->create('Timesheet');?>
	<fieldset>
		<legend><?php echo __('Select Your Payroll Period'); ?></legend>
	<?php
		echo $this->Form->input('start_date',array('type'=>'date', 'label' => 'Start Date', 'dateFormat' => 'DMY'));

		echo $this->Form->input('end_date',array( 'type'=>'date','label' => 'End Date', 'dateFormat' => 'DMY'));                   
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>





<h2><?php echo __('Volunteers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('First_Name');?></th>
			<th><?php echo $this->Paginator->sort('Last_Name');?></th>
			<th><?php echo $this->Paginator->sort('Visits');?></th>
			<th><?php echo $this->Paginator->sort('Hours');?></th>
			<th><?php echo $this->Paginator->sort('Amount');?></th>
	
	</tr>
	<?php
	foreach ($payrolls as $payroll): ?>
	<tr>
		<td><?php echo h($payroll['First_Name']); ?>&nbsp;</td>
		<td><?php echo h($payroll['Last_Name']); ?>&nbsp;</td>
		<td><?php echo h($payroll['Visits']); ?>&nbsp;</td>
		<td><?php echo h($payroll['Hours']); ?>&nbsp;</td>
		<td><?php echo h($payroll['Amount']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>






</div>








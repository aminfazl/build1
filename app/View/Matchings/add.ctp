<div class="matchings form">
<?php echo $this->Form->create('Matching');?>
	<fieldset>
		<legend><?php echo __('Add Matching'); ?></legend>
	<?php
		//var $end_date => 'date';
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('fromdate',array('dateFormat' => 'DMY','minYear' => date('Y') - 10,'maxYear' => date('Y')));
		echo $this->Form->input('todate',array('selected' => strtotime("+24 hours",mktime()),'dateFormat' => 'DMY'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matchings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

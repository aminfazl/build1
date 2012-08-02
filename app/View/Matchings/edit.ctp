<div class="matchings form">
<?php echo $this->Form->create('Matching');?>
	<fieldset>
		<legend><?php echo __('Edit Matching'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('fromdate');
		echo $this->Form->input('todate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Matching.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Matching.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Matchings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="lgacouncils form">
<?php echo $this->Form->create('Lgacouncil');?>
	<fieldset>
		<legend><?php echo __('Add Lgacouncil'); ?></legend>
	<?php
		echo $this->Form->input('lgacouncil_name');
		echo $this->Form->input('efaregion_id');
		echo $this->Form->input('dhsregion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Efaregions'), array('controller' => 'efaregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Efaregion'), array('controller' => 'efaregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dhsregions'), array('controller' => 'dhsregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dhsregion'), array('controller' => 'dhsregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>

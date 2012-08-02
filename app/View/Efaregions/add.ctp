<div class="efaregions form">
<?php echo $this->Form->create('Efaregion');?>
	<fieldset>
		<legend><?php echo __('Add Efaregion'); ?></legend>
	<?php
		echo $this->Form->input('efaregion_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Efaregions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
	</ul>
</div>

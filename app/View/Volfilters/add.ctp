<div class="volfilters form">
<?php echo $this->Form->create('Volfilter');?>
	<fieldset>
		<legend><?php echo __('Add Volfilter'); ?></legend>
	<?php
		echo $this->Form->input('volfilter_name');
		echo $this->Form->input('minage');
		echo $this->Form->input('maxage');
		echo $this->Form->input('Interest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Volfilters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

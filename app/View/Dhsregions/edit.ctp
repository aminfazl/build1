<div class="dhsregions form">
<?php echo $this->Form->create('Dhsregion');?>
	<fieldset>
		<legend><?php echo __('Edit Dhsregion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dhsregion_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dhsregion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Dhsregion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dhsregions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
	</ul>
</div>

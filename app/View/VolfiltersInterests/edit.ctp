<div class="volfiltersInterests form">
<?php echo $this->Form->create('VolfiltersInterest');?>
	<fieldset>
		<legend><?php echo __('Edit Volfilters Interest'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('volfilter_id');
		echo $this->Form->input('interest_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VolfiltersInterest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VolfiltersInterest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Volfilters Interests'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Volfilters'), array('controller' => 'volfilters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volfilter'), array('controller' => 'volfilters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

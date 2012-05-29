<div class="filtersInterests form">
<?php echo $this->Form->create('FiltersInterest');?>
	<fieldset>
		<legend><?php echo __('Edit Filters Interest'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('filter_id');
		echo $this->Form->input('interest_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FiltersInterest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FiltersInterest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Filters Interests'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Filters'), array('controller' => 'filters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filter'), array('controller' => 'filters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

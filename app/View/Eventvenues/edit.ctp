<div class="eventvenues form">
<?php echo $this->Form->create('Eventvenue');?>
	<fieldset>
		<legend><?php echo __('Edit Eventvenue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('street_address');
		echo $this->Form->input('suburb');
		echo $this->Form->input('venue_name');
		echo $this->Form->input('state_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Eventvenue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Eventvenue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eventvenues'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>

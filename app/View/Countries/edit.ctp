<div class="countries form">
<?php echo $this->Form->create('Country');?>
	<fieldset>
		<legend><?php echo __('Edit Country'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('countryname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Country.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Country.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

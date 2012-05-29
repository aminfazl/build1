<div class="clientstatuses form">
<?php echo $this->Form->create('Clientstatus');?>
	<fieldset>
		<legend><?php echo __('Edit Clientstatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clientstatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clientstatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Statuses List'), array('action' => 'index'));?></li>
        <li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>

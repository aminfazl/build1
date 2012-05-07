<div class="communicationchannels form">
<?php echo $this->Form->create('Communicationchannel');?>
	<fieldset>
		<legend><?php echo __('Edit Communication Channel'); ?></legend>
	<?php
		echo $this->Form->input('communicationchannel_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Communicationchannel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Communicationchannel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Channel List'), array('action' => 'index'));?></li>
	</ul>
</div>

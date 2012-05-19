<div class="communicationchannels form">
<?php echo $this->Form->create('Communicationchannel');?>
	<fieldset>
		<legend><?php echo __('Add Communication Channel'); ?></legend>
	<?php
		echo $this->Form->input('communicationchannel_name', array('label' => 'Communication Channel Name'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Channel List'), array('action' => 'index'));?></li>
	</ul>
</div>

<div class="volunteerstatuses form">
<?php echo $this->Form->create('Volunteerstatus');?>
	<fieldset>
		<legend><?php echo __('Add Volunteerstatus'); ?></legend>
	<?php
		echo $this->Form->input('volunteerstatus_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Volunteerstatuses'), array('action' => 'index'));?></li>
	</ul>
</div>

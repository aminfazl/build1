<div class="households view">
<h2><?php  echo __('Household');?></h2>
	<dl>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($household['State']['state_name'], array('controller' => 'states', 'action' => 'view', $household['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($household['Household']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($household['Household']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($household['Household']['postcode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Household'), array('action' => 'edit', $household['Household']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Household'), array('action' => 'delete', $household['Household']['id']), null, __('Are you sure you want to delete # %s?', $household['Household']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Household List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="eventvenues view">
<h2><?php  echo __('Eventvenue');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventvenue['Eventvenue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($eventvenue['Eventvenue']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($eventvenue['Eventvenue']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue Name'); ?></dt>
		<dd>
			<?php echo h($eventvenue['Eventvenue']['venue_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventvenue['State']['state_name'], array('controller' => 'states', 'action' => 'view', $eventvenue['State']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eventvenue'), array('action' => 'edit', $eventvenue['Eventvenue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eventvenue'), array('action' => 'delete', $eventvenue['Eventvenue']['id']), null, __('Are you sure you want to delete # %s?', $eventvenue['Eventvenue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventvenues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eventvenue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>

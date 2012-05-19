<div class="volinterestslogs view">
<h2><?php  echo __('Volinterestslog');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($volinterestslog['Volinterestslog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volinterestslog['Interest']['id'], array('controller' => 'interests', 'action' => 'view', $volinterestslog['Interest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volinterestslog['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $volinterestslog['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Volinterestslog'), array('action' => 'edit', $volinterestslog['Volinterestslog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Volinterestslog'), array('action' => 'delete', $volinterestslog['Volinterestslog']['id']), null, __('Are you sure you want to delete # %s?', $volinterestslog['Volinterestslog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Volinterestslogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volinterestslog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>

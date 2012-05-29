<div class="interestslogs view">
<h2><?php  echo __('Interestslog');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interestslog['Interestslog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interestslog['Interest']['interest_name'], array('controller' => 'interests', 'action' => 'view', $interestslog['Interest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interestslog['Client']['last_name'], array('controller' => 'clients', 'action' => 'view', $interestslog['Client']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interestslog'), array('action' => 'edit', $interestslog['Interestslog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interestslog'), array('action' => 'delete', $interestslog['Interestslog']['id']), null, __('Are you sure you want to delete # %s?', $interestslog['Interestslog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interestslogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interestslog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

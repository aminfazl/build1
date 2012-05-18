<div class="volfiltersInterests view">
<h2><?php  echo __('Volfilters Interest');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($volfiltersInterest['VolfiltersInterest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volfilter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volfiltersInterest['Volfilter']['id'], array('controller' => 'volfilters', 'action' => 'view', $volfiltersInterest['Volfilter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volfiltersInterest['Interest']['id'], array('controller' => 'interests', 'action' => 'view', $volfiltersInterest['Interest']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Volfilters Interest'), array('action' => 'edit', $volfiltersInterest['VolfiltersInterest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Volfilters Interest'), array('action' => 'delete', $volfiltersInterest['VolfiltersInterest']['id']), null, __('Are you sure you want to delete # %s?', $volfiltersInterest['VolfiltersInterest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Volfilters Interests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volfilters Interest'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volfilters'), array('controller' => 'volfilters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volfilter'), array('controller' => 'volfilters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

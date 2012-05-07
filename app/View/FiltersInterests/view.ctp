<div class="filtersInterests view">
<h2><?php  echo __('Filters Interest');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filtersInterest['FiltersInterest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filtersInterest['Filter']['filter_name'], array('controller' => 'filters', 'action' => 'view', $filtersInterest['Filter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filtersInterest['Interest']['interest_name'], array('controller' => 'interests', 'action' => 'view', $filtersInterest['Interest']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Filters Interest'), array('action' => 'edit', $filtersInterest['FiltersInterest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Filters Interest'), array('action' => 'delete', $filtersInterest['FiltersInterest']['id']), null, __('Are you sure you want to delete # %s?', $filtersInterest['FiltersInterest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Filters Interests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filters Interest'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filters'), array('controller' => 'filters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filter'), array('controller' => 'filters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>

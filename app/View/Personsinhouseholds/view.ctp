<div class="personsinhouseholds view">
<h2><?php  echo __('Personsinhousehold');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personsinhousehold['Personsinhousehold']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personsinhousehold['Household']['id'], array('controller' => 'households', 'action' => 'view', $personsinhousehold['Household']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personsinhousehold['Person']['id'], array('controller' => 'people', 'action' => 'view', $personsinhousehold['Person']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personsinhousehold'), array('action' => 'edit', $personsinhousehold['Personsinhousehold']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personsinhousehold'), array('action' => 'delete', $personsinhousehold['Personsinhousehold']['id']), null, __('Are you sure you want to delete # %s?', $personsinhousehold['Personsinhousehold']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personsinhouseholds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personsinhousehold'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>

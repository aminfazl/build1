<div class="carers view">
<h2><?php  echo __('Carer');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incomesource'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carer['Incomesource']['id'], array('controller' => 'incomesources', 'action' => 'view', $carer['Incomesource']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carer['State']['id'], array('controller' => 'states', 'action' => 'view', $carer['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lgacouncil'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carer['Lgacouncil']['id'], array('controller' => 'lgacouncils', 'action' => 'view', $carer['Lgacouncil']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carer['Language']['id'], array('controller' => 'languages', 'action' => 'view', $carer['Language']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carer'), array('action' => 'edit', $carer['Carer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carer'), array('action' => 'delete', $carer['Carer']['id']), null, __('Are you sure you want to delete # %s?', $carer['Carer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomesources'), array('controller' => 'incomesources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incomesource'), array('controller' => 'incomesources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="siblings view">
<h2><?php  echo __('Sibling');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['birth_date'], array('dateFormat' => 'DMY')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sibling['Family']['id'], array('controller' => 'families', 'action' => 'view', $sibling['Family']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sibling'), array('action' => 'edit', $sibling['Sibling']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sibling'), array('action' => 'delete', $sibling['Sibling']['id']), null, __('Are you sure you want to delete # %s?', $sibling['Sibling']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibling'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Families'), array('controller' => 'families', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family'), array('controller' => 'families', 'action' => 'add')); ?> </li>
	</ul>
</div>

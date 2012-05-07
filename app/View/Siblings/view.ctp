<div class="siblings view">
<h2><?php  echo __('Sibling');?></h2>
	<dl>
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
			<?php echo h($sibling['Sibling']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($sibling['Sibling']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sibling['Household']['street_address'], array('controller' => 'households', 'action' => 'view', $sibling['Household']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete Sibling'), array('action' => 'delete', $sibling['Sibling']['id']), null, __('Are you sure you want to delete # %s?', $sibling['Sibling']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Sibling List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibling'), array('action' => 'add')); ?> </li>
	</ul>
</div>
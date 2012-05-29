<div class="filters view">
<h2><?php  echo __('Filter');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filter Name'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['filter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minage'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['minage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maxage'); ?></dt>
		<dd>
			<?php echo h($filter['Filter']['maxage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Filter'), array('action' => 'edit', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Filter'), array('action' => 'delete', $filter['Filter']['id']), null, __('Are you sure you want to delete # %s?', $filter['Filter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Filters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interests'), array('controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interests');?></h3>
	<?php if (!empty($filter['Interest'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interest Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($filter['Interest'] as $interest): ?>
		<tr>
			<td><?php echo $interest['id'];?></td>
			<td><?php echo $interest['interest_name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interests', 'action' => 'view', $interest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interests', 'action' => 'edit', $interest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interests', 'action' => 'delete', $interest['id']), null, __('Are you sure you want to delete # %s?', $interest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interest'), array('controller' => 'interests', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

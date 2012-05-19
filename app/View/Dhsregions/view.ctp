<div class="dhsregions view">
<h2><?php  echo __('Dhsregion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dhsregion['Dhsregion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dhsregion Name'); ?></dt>
		<dd>
			<?php echo h($dhsregion['Dhsregion']['dhsregion_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dhsregion'), array('action' => 'edit', $dhsregion['Dhsregion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dhsregion'), array('action' => 'delete', $dhsregion['Dhsregion']['id']), null, __('Are you sure you want to delete # %s?', $dhsregion['Dhsregion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dhsregions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dhsregion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('controller' => 'lgacouncils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lgacouncils');?></h3>
	<?php if (!empty($dhsregion['Lgacouncil'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lgacouncil Name'); ?></th>
		<th><?php echo __('Efaregion Id'); ?></th>
		<th><?php echo __('Dhsregion Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dhsregion['Lgacouncil'] as $lgacouncil): ?>
		<tr>
			<td><?php echo $lgacouncil['id'];?></td>
			<td><?php echo $lgacouncil['lgacouncil_name'];?></td>
			<td><?php echo $lgacouncil['efaregion_id'];?></td>
			<td><?php echo $lgacouncil['dhsregion_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lgacouncils', 'action' => 'view', $lgacouncil['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lgacouncils', 'action' => 'edit', $lgacouncil['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lgacouncils', 'action' => 'delete', $lgacouncil['id']), null, __('Are you sure you want to delete # %s?', $lgacouncil['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lgacouncil'), array('controller' => 'lgacouncils', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

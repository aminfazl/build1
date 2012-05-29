<div class="lgacouncils view">
<h2><?php  echo __('Lgacouncil');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lgacouncil['Lgacouncil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lgacouncil Name'); ?></dt>
		<dd>
			<?php echo h($lgacouncil['Lgacouncil']['lgacouncil_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Efaregion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lgacouncil['Efaregion']['id'], array('controller' => 'efaregions', 'action' => 'view', $lgacouncil['Efaregion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dhsregion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lgacouncil['Dhsregion']['id'], array('controller' => 'dhsregions', 'action' => 'view', $lgacouncil['Dhsregion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lgacouncil'), array('action' => 'edit', $lgacouncil['Lgacouncil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lgacouncil'), array('action' => 'delete', $lgacouncil['Lgacouncil']['id']), null, __('Are you sure you want to delete # %s?', $lgacouncil['Lgacouncil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lgacouncils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lgacouncil'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Efaregions'), array('controller' => 'efaregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Efaregion'), array('controller' => 'efaregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dhsregions'), array('controller' => 'dhsregions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dhsregion'), array('controller' => 'dhsregions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carers');?></h3>
	<?php if (!empty($lgacouncil['Carer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Incomesource Id'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('Lgacouncil Id'); ?></th>
		<th><?php echo __('Language Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($lgacouncil['Carer'] as $carer): ?>
		<tr>
			<td><?php echo $carer['id'];?></td>
			<td><?php echo $carer['last_name'];?></td>
			<td><?php echo $carer['gender'];?></td>
			<td><?php echo $carer['birth_date'];?></td>
			<td><?php echo $carer['first_name'];?></td>
			<td><?php echo $carer['incomesource_id'];?></td>
			<td><?php echo $carer['postcode'];?></td>
			<td><?php echo $carer['state_id'];?></td>
			<td><?php echo $carer['suburb'];?></td>
			<td><?php echo $carer['street_address'];?></td>
			<td><?php echo $carer['lgacouncil_id'];?></td>
			<td><?php echo $carer['language_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carers', 'action' => 'view', $carer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carers', 'action' => 'edit', $carer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carers', 'action' => 'delete', $carer['id']), null, __('Are you sure you want to delete # %s?', $carer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

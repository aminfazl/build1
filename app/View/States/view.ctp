<div class="states view">
<h2><?php  echo __('State');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Name'); ?></dt>
		<dd>
			<?php echo h($state['State']['state_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), null, __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Households');?></h3>
	<?php if (!empty($state['Household'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Household'] as $household): ?>
		<tr>
			<td><?php echo $household['id'];?></td>
			<td><?php echo $household['state_id'];?></td>
			<td><?php echo $household['suburb'];?></td>
			<td><?php echo $household['street_address'];?></td>
			<td><?php echo $household['postcode'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'households', 'action' => 'view', $household['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'households', 'action' => 'edit', $household['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'households', 'action' => 'delete', $household['id']), null, __('Are you sure you want to delete # %s?', $household['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

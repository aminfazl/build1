<div class="volunteerstatuses view">
<h2><?php  echo __('Volunteerstatus');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($volunteerstatus['Volunteerstatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteerstatus Name'); ?></dt>
		<dd>
			<?php echo h($volunteerstatus['Volunteerstatus']['volunteerstatus_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Volunteerstatus'), array('action' => 'edit', $volunteerstatus['Volunteerstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Volunteerstatus'), array('action' => 'delete', $volunteerstatus['Volunteerstatus']['id']), null, __('Are you sure you want to delete # %s?', $volunteerstatus['Volunteerstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteerstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteerstatus'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Volunteers');?></h3>
	<?php if (!empty($volunteerstatus['Volunteer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Volunteerstatus Id'); ?></th>
		<th><?php echo __('Communicationchannel Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($volunteerstatus['Volunteer'] as $volunteer): ?>
		<tr>
			<td><?php echo $volunteer['id'];?></td>
			<td><?php echo $volunteer['volunteerstatus_id'];?></td>
			<td><?php echo $volunteer['communicationchannel_id'];?></td>
			<td><?php echo $volunteer['first_name'];?></td>
			<td><?php echo $volunteer['last_name'];?></td>
			<td><?php echo $volunteer['gender'];?></td>
			<td><?php echo $volunteer['birth_date'];?></td>
			<td><?php echo $volunteer['postcode'];?></td>
			<td><?php echo $volunteer['state_id'];?></td>
			<td><?php echo $volunteer['suburb'];?></td>
			<td><?php echo $volunteer['street_address'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'volunteers', 'action' => 'view', $volunteer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'volunteers', 'action' => 'edit', $volunteer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'volunteers', 'action' => 'delete', $volunteer['id']), null, __('Are you sure you want to delete # %s?', $volunteer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

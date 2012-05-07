<div class="carers view">
<h2><?php  echo __('Carer');?></h2>
	<dl>
    	<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($carer['Carer']['first_name']); ?>
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
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carer['Household']['street_address'], array('controller' => 'households', 'action' => 'view', $carer['Household']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients');?></h3>
	<?php if (!empty($carer['Client'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clientstatus Id'); ?></th>
		<th><?php echo __('Communicationchannel Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th><?php echo __('Birthcountry Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($carer['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id'];?></td>
			<td><?php echo $client['clientstatus_id'];?></td>
			<td><?php echo $client['communicationchannel_id'];?></td>
			<td><?php echo $client['first_name'];?></td>
			<td><?php echo $client['gender'];?></td>
			<td><?php echo $client['last_name'];?></td>
			<td><?php echo $client['birth_date'];?></td>
			<td><?php echo $client['household_id'];?></td>
			<td><?php echo $client['birthcountry_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="clientstatuses view">
<h2><?php  echo __('Clientstatus');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientstatus['Clientstatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Name'); ?></dt>
		<dd>
			<?php echo h($clientstatus['Clientstatus']['status_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clientstatus'), array('action' => 'edit', $clientstatus['Clientstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clientstatus'), array('action' => 'delete', $clientstatus['Clientstatus']['id']), null, __('Are you sure you want to delete # %s?', $clientstatus['Clientstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientstatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientstatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients');?></h3>
	<?php if (!empty($clientstatus['Client'])):?>
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
		foreach ($clientstatus['Client'] as $client): ?>
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

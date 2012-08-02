<div class="clients view">
<h2><?php  echo __('Client');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clientstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Clientstatus']['status_name'], array('controller' => 'clientstatuses', 'action' => 'view', $client['Clientstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communicationchannel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Communicationchannel']['communicationchannel_name'], array('controller' => 'communicationchannels', 'action' => 'view', $client['Communicationchannel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($client['Client']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($client['Client']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Household'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Household']['id'], array('controller' => 'households', 'action' => 'view', $client['Household']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthcountry Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['birthcountry_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientstatuses'), array('controller' => 'clientstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientstatus'), array('controller' => 'clientstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communicationchannels'), array('controller' => 'communicationchannels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Communicationchannel'), array('controller' => 'communicationchannels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Birthcountry'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interestslogs'), array('controller' => 'interestslogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interestslog'), array('controller' => 'interestslogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carers'), array('controller' => 'carers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carer'), array('controller' => 'carers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblinks'), array('controller' => 'siblinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siblink'), array('controller' => 'siblinks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interestslogs');?></h3>
	<?php if (!empty($client['Interestslog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interest Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Interestslog'] as $interestslog): ?>
		<tr>
			<td><?php echo $interestslog['id'];?></td>
			<td><?php echo $interestslog['interest_id'];?></td>
			<td><?php echo $interestslog['client_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interestslogs', 'action' => 'view', $interestslog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interestslogs', 'action' => 'edit', $interestslog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interestslogs', 'action' => 'delete', $interestslog['id']), null, __('Are you sure you want to delete # %s?', $interestslog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interestslog'), array('controller' => 'interestslogs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Carers');?></h3>
	<?php if (!empty($client['Carer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Carer'] as $carer): ?>
		<tr>
			<td><?php echo $carer['id'];?></td>
			<td><?php echo $carer['last_name'];?></td>
			<td><?php echo $carer['gender'];?></td>
			<td><?php echo $carer['birth_date'];?></td>
			<td><?php echo $carer['first_name'];?></td>
			<td><?php echo $carer['household_id'];?></td>
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
<div class="related">
	<h3><?php echo __('Related Siblinks');?></h3>
	<?php if (!empty($client['Siblink'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Household Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Siblink'] as $siblink): ?>
		<tr>
			<td><?php echo $siblink['id'];?></td>
			<td><?php echo $siblink['last_name'];?></td>
			<td><?php echo $siblink['gender'];?></td>
			<td><?php echo $siblink['birth_date'];?></td>
			<td><?php echo $siblink['first_name'];?></td>
			<td><?php echo $siblink['household_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'siblinks', 'action' => 'view', $siblink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'siblinks', 'action' => 'edit', $siblink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'siblinks', 'action' => 'delete', $siblink['id']), null, __('Are you sure you want to delete # %s?', $siblink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Siblink'), array('controller' => 'siblinks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

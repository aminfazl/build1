<div class="clients view">
<h2><?php  echo __('Client');?></h2>
	<dl>
		<dt><?php echo __('Clientstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Clientstatus']['id'], array('controller' => 'clientstatuses', 'action' => 'view', $client['Clientstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communication Channel'); ?></dt>
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
			<?php echo $this->Html->link($client['Household']['street_address'], array('controller' => 'households', 'action' => 'view', $client['Household']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['country']['countryname'], array('controller' => 'countries', 'action' => 'view', $client['country']['id'])); ?>
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
	</ul>
</div>
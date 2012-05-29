<div class="clients view">
<h2><?php  echo __('Client');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
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
		<dt><?php echo __('Disability'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Disability']['id'], array('controller' => 'disabilities', 'action' => 'view', $client['Disability']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['school_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otherservices Description'); ?></dt>
		<dd>
			<?php echo h($client['Client']['otherservices_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prioritylevel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Prioritylevel']['id'], array('controller' => 'prioritylevels', 'action' => 'view', $client['Prioritylevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fundingsource'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Fundingsource']['id'], array('controller' => 'fundingsources', 'action' => 'view', $client['Fundingsource']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Religion']['id'], array('controller' => 'religions', 'action' => 'view', $client['Religion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dateaccepted'); ?></dt>
		<dd>
			<?php echo h($client['Client']['dateaccepted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthcountry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Birthcountry']['id'], array('controller' => 'countries', 'action' => 'view', $client['Birthcountry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communicationchannel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Communicationchannel']['id'], array('controller' => 'communicationchannels', 'action' => 'view', $client['Communicationchannel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clientstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Clientstatus']['id'], array('controller' => 'clientstatuses', 'action' => 'view', $client['Clientstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Family']['id'], array('controller' => 'families', 'action' => 'view', $client['Family']['id'])); ?>
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
</div>

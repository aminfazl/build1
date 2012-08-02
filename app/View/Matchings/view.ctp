<div class="matchings view">
<h2><?php  echo __('Matching');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($matching['Matching']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matching['Volunteer']['first_name'], array('controller' => 'volunteers', 'action' => 'view', $matching['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matching['Client']['id'], array('controller' => 'clients', 'action' => 'view', $matching['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fromdate'); ?></dt>
		<dd>
			<?php echo h($matching['Matching']['fromdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Todate'); ?></dt>
		<dd>
			<?php echo h($matching['Matching']['todate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Matching'), array('action' => 'edit', $matching['Matching']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Matching'), array('action' => 'delete', $matching['Matching']['id']), null, __('Are you sure you want to delete # %s?', $matching['Matching']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matchings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matching'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>

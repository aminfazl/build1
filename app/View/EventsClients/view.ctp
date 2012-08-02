<div class="eventsClients view">
<h2><?php  echo __('Events Client');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsClient['EventsClient']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsClient['Client']['first_name'], array('controller' => 'clients', 'action' => 'view', $eventsClient['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventsClient['Event']['event_name'], array('controller' => 'events', 'action' => 'view', $eventsClient['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attended'); ?></dt>
		<dd>
			<?php echo h($eventsClient['EventsClient']['attended']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($eventsClient['EventsClient']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmed'); ?></dt>
		<dd>
			<?php echo h($eventsClient['EventsClient']['confirmed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Client'), array('action' => 'edit', $eventsClient['EventsClient']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Events Client'), array('action' => 'delete', $eventsClient['EventsClient']['id']), null, __('Are you sure you want to delete # %s?', $eventsClient['EventsClient']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>

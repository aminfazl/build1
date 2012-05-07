<div class="clientsSiblings view">
<h2><?php  echo __('Clients Sibling');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientsSibling['ClientsSibling']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsSibling['Client']['last_name'], array('controller' => 'clients', 'action' => 'view', $clientsSibling['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sibling'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsSibling['Sibling']['first_name'], array('controller' => 'siblings', 'action' => 'view', $clientsSibling['Sibling']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clients Sibling'), array('action' => 'edit', $clientsSibling['ClientsSibling']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clients Sibling'), array('action' => 'delete', $clientsSibling['ClientsSibling']['id']), null, __('Are you sure you want to delete # %s?', $clientsSibling['ClientsSibling']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients Siblings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients Sibling'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siblings'), array('controller' => 'siblings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibling'), array('controller' => 'siblings', 'action' => 'add')); ?> </li>
	</ul>
</div>

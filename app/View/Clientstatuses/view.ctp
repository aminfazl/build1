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
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $clientstatus['Clientstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $clientstatus['Clientstatus']['id']), null, __('Are you sure you want to delete # %s?', $clientstatus['Clientstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Status List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>

</div>

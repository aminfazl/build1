<div class="contacts view">
<h2><?php  echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Refnumber'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['refnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Staff'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['Staff']['first_name'], array('controller' => 'staffs', 'action' => 'view', $contact['Staff']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['User']['username'], array('controller' => 'users', 'action' => 'view', $contact['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacttype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['Contacttype']['contacttype_name'], array('controller' => 'contacttypes', 'action' => 'view', $contact['Contacttype']['id'])); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
</div>

<div class="volunteers view">
<h2><?php  echo __('Volunteer');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($volunteer['Volunteer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volunteerstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volunteer['Volunteerstatus']['volunteerstatus_name'], array('controller' => 'volunteerstatuses', 'action' => 'view', $volunteer['Volunteerstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Communication
		Channel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volunteer['User']['Communicationchannel']['communicationchannel_name'], array('controller' => 'communicationchannels', 'action' => 'view', $volunteer['User']['Communicationchannel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($volunteer['User']['State']['state_name'], array('controller' => 'states', 'action' => 'view', $volunteer['User']['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($volunteer['User']['street_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Volunteer'), array('action' => 'edit', $volunteer['Volunteer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Volunteer'), array('action' => 'delete', $volunteer['User']['first_name']), null, __('Are you sure you want to delete # %s?', $volunteer['Volunteer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Volunteers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volunteer'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Timesheets');?></h3>
	<?php if (!empty($volunteer['Timesheet'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activitytype Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Volunteer Id'); ?></th>
		<th><?php echo __('Workdate'); ?></th>
		<th><?php echo __('Fromtime'); ?></th>
		<th><?php echo __('Totime'); ?></th>




		<!-- -->

		<!-- Label to add field name in the timesheets viewer table-->

		<th><?php echo __('Payment'); ?></th>


		<!-- -->








		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($volunteer['Timesheet'] as $timesheet): ?>
		<tr>
			<td><?php echo $timesheet['id'];?></td>
			<td><?php echo $timesheet['activitytype_id'];?></td>
			<td><?php echo $timesheet['client_id'];?></td>
			<td><?php echo $timesheet['volunteer_id'];?></td>
			<td><?php echo $timesheet['workdate'];?></td>
			<td><?php echo $timesheet['fromtime'];?></td>
			<td><?php echo $timesheet['totime'];?></td>



			

			<!-- -->

			<!-- To get the visittype data from the database-->
			<td><?php echo $timesheet['visittype'];?></td>


			<!-- -->






			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'timesheets', 'action' => 'view', $timesheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'timesheets', 'action' => 'edit', $timesheet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'timesheets', 'action' => 'delete', $timesheet['id']), null, __('Are you sure you want to delete # %s?', $timesheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Timesheet'), array('controller' => 'timesheets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Volinterestslogs');?></h3>
	<?php if (!empty($volunteer['Volinterestslog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Interest Id'); ?></th>
		<th><?php echo __('Volunteer Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($volunteer['Volinterestslog'] as $volinterestslog): ?>
		<tr>
			<td><?php echo $volinterestslog['id'];?></td>
			<td><?php echo $volinterestslog['interest_id'];?></td>
			<td><?php echo $volinterestslog['volunteer_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'volinterestslogs', 'action' => 'view', $volinterestslog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'volinterestslogs', 'action' => 'edit', $volinterestslog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'volinterestslogs', 'action' => 'delete', $volinterestslog['id']), null, __('Are you sure you want to delete # %s?', $volinterestslog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Volinterestslog'), array('controller' => 'volinterestslogs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="suspensionReasons view">
<h2><?php  echo __('Suspension Reason');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($suspensionReason['SuspensionReason']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($suspensionReason['SuspensionReason']['reason']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Suspension Reason'), array('action' => 'edit', $suspensionReason['SuspensionReason']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Suspension Reason'), array('action' => 'delete', $suspensionReason['SuspensionReason']['id']), null, __('Are you sure you want to delete # %s?', $suspensionReason['SuspensionReason']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Suspension Reasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suspension Reason'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suspended Students'), array('controller' => 'suspended_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suspended Student'), array('controller' => 'suspended_students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Suspended Students');?></h3>
	<?php if (!empty($suspensionReason['SuspendedStudent'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Detail Id'); ?></th>
		<th><?php echo __('Suspension Reason Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($suspensionReason['SuspendedStudent'] as $suspendedStudent): ?>
		<tr>
			<td><?php echo $suspendedStudent['id'];?></td>
			<td><?php echo $suspendedStudent['student_detail_id'];?></td>
			<td><?php echo $suspendedStudent['suspension_reason_id'];?></td>
			<td><?php echo $suspendedStudent['active'];?></td>
			<td><?php echo $suspendedStudent['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'suspended_students', 'action' => 'view', $suspendedStudent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'suspended_students', 'action' => 'edit', $suspendedStudent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'suspended_students', 'action' => 'delete', $suspendedStudent['id']), null, __('Are you sure you want to delete # %s?', $suspendedStudent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Suspended Student'), array('controller' => 'suspended_students', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

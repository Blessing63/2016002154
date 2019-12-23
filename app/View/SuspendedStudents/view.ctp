<div class="suspendedStudents view">
<h2><?php  echo __('Suspended Student');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($suspendedStudent['SuspendedStudent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($suspendedStudent['StudentDetail']['id'], array('controller' => 'student_details', 'action' => 'view', $suspendedStudent['StudentDetail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suspension Reason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($suspendedStudent['SuspensionReason']['id'], array('controller' => 'suspension_reasons', 'action' => 'view', $suspendedStudent['SuspensionReason']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($suspendedStudent['SuspendedStudent']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($suspendedStudent['SuspendedStudent']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Suspended Student'), array('action' => 'edit', $suspendedStudent['SuspendedStudent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Suspended Student'), array('action' => 'delete', $suspendedStudent['SuspendedStudent']['id']), null, __('Are you sure you want to delete # %s?', $suspendedStudent['SuspendedStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Suspended Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suspended Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Details'), array('controller' => 'student_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Detail'), array('controller' => 'student_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suspension Reasons'), array('controller' => 'suspension_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suspension Reason'), array('controller' => 'suspension_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>

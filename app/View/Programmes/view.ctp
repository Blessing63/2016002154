<div class="programmes view">
<h2><?php  echo __('Programme');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($programme['Programme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($programme['Programme']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($programme['Department']['name'], array('controller' => 'departments', 'action' => 'view', $programme['Department']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Programme'), array('action' => 'edit', $programme['Programme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Programme'), array('action' => 'delete', $programme['Programme']['id']), null, __('Are you sure you want to delete # %s?', $programme['Programme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Details'), array('controller' => 'student_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Detail'), array('controller' => 'student_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Student Details');?></h3>
	<?php if (!empty($programme['StudentDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reg Number'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Programme Id'); ?></th>
		<th><?php echo __('Level Of Study'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Suspended'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($programme['StudentDetail'] as $studentDetail): ?>
		<tr>
			<td><?php echo $studentDetail['id'];?></td>
			<td><?php echo $studentDetail['reg_number'];?></td>
			<td><?php echo $studentDetail['firstname'];?></td>
			<td><?php echo $studentDetail['lastname'];?></td>
			<td><?php echo $studentDetail['programme_id'];?></td>
			<td><?php echo $studentDetail['level_of_study'];?></td>
			<td><?php echo $studentDetail['dob'];?></td>
			<td><?php echo $studentDetail['address'];?></td>
			<td><?php echo $studentDetail['email_address'];?></td>
			<td><?php echo $studentDetail['mobile'];?></td>
			<td><?php echo $studentDetail['suspended'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_details', 'action' => 'view', $studentDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_details', 'action' => 'edit', $studentDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_details', 'action' => 'delete', $studentDetail['id']), null, __('Are you sure you want to delete # %s?', $studentDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Detail'), array('controller' => 'student_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

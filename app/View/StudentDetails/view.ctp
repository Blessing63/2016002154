<div class="studentDetails view">
<h2><?php  echo __('Student Detail');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Number'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['reg_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentDetail['Programme']['name'], array('controller' => 'programmes', 'action' => 'view', $studentDetail['Programme']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level Of Study'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['level_of_study']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suspended'); ?></dt>
		<dd>
			<?php echo h($studentDetail['StudentDetail']['suspended']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Detail'), array('action' => 'edit', $studentDetail['StudentDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Detail'), array('action' => 'delete', $studentDetail['StudentDetail']['id']), null, __('Are you sure you want to delete # %s?', $studentDetail['StudentDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('controller' => 'programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="studentBorrowings view">
<h2><?php  echo __('Student Borrowing');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentBorrowing['StudentDetail']['id'], array('controller' => 'student_details', 'action' => 'view', $studentBorrowing['StudentDetail']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentBorrowing['Book']['name'], array('controller' => 'books', 'action' => 'view', $studentBorrowing['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date From'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['date_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date To'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['date_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Returned'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['date_returned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Overdue'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['book_overdue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($studentBorrowing['StudentBorrowing']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Borrowing'), array('action' => 'edit', $studentBorrowing['StudentBorrowing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Borrowing'), array('action' => 'delete', $studentBorrowing['StudentBorrowing']['id']), null, __('Are you sure you want to delete # %s?', $studentBorrowing['StudentBorrowing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Borrowings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Borrowing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Details'), array('controller' => 'student_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Detail'), array('controller' => 'student_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>

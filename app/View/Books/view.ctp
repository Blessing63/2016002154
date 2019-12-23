<div class="books view">
<h2><?php  echo __('Book');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($book['Book']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($book['Book']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($book['Book']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isbn'); ?></dt>
		<dd>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $book['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Department']['name'], array('controller' => 'departments', 'action' => 'view', $book['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stack Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['StackRoom']['name'], array('controller' => 'stack_rooms', 'action' => 'view', $book['StackRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $book['Status']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stack Rooms'), array('controller' => 'stack_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stack Room'), array('controller' => 'stack_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Borrowings'), array('controller' => 'student_borrowings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Borrowing'), array('controller' => 'student_borrowings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Student Borrowings');?></h3>
	<?php if (!empty($book['StudentBorrowing'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Date From'); ?></th>
		<th><?php echo __('Date To'); ?></th>
		<th><?php echo __('Date Returned'); ?></th>
		<th><?php echo __('Book Overdue'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($book['StudentBorrowing'] as $studentBorrowing): ?>
		<tr>
			<td><?php echo $studentBorrowing['id'];?></td>
			<td><?php echo $studentBorrowing['student_id'];?></td>
			<td><?php echo $studentBorrowing['book_id'];?></td>
			<td><?php echo $studentBorrowing['date_from'];?></td>
			<td><?php echo $studentBorrowing['date_to'];?></td>
			<td><?php echo $studentBorrowing['date_returned'];?></td>
			<td><?php echo $studentBorrowing['book_overdue'];?></td>
			<td><?php echo $studentBorrowing['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_borrowings', 'action' => 'view', $studentBorrowing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_borrowings', 'action' => 'edit', $studentBorrowing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_borrowings', 'action' => 'delete', $studentBorrowing['id']), null, __('Are you sure you want to delete # %s?', $studentBorrowing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Borrowing'), array('controller' => 'student_borrowings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="stackRooms view">
<h2><?php  echo __('Stack Room');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stackRoom['StackRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($stackRoom['StackRoom']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Floor'); ?></dt>
		<dd>
			<?php echo h($stackRoom['StackRoom']['floor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stack Room'), array('action' => 'edit', $stackRoom['StackRoom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stack Room'), array('action' => 'delete', $stackRoom['StackRoom']['id']), null, __('Are you sure you want to delete # %s?', $stackRoom['StackRoom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stack Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stack Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books');?></h3>
	<?php if (!empty($stackRoom['Book'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Stack Room Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stackRoom['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id'];?></td>
			<td><?php echo $book['name'];?></td>
			<td><?php echo $book['author'];?></td>
			<td><?php echo $book['year'];?></td>
			<td><?php echo $book['isbn'];?></td>
			<td><?php echo $book['publisher_id'];?></td>
			<td><?php echo $book['department_id'];?></td>
			<td><?php echo $book['stack_room_id'];?></td>
			<td><?php echo $book['status_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

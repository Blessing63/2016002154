<fieldset>
		<legend><b><?php echo __('Books');?></b></legend>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Title/Name</th>
			<th>Author</th>
			<th>Year</th>
			<th>ISBN</th>
			<th>Publisher</th>
			<th>Department</th>
			<th>Stack room</th>
			<th>Status</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['name']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['author']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['year']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
		<td>
			<?php echo h($book['Publisher']['name']); ?>
		</td>
		<td>
			<?php echo h($book['Department']['name']); ?>
		</td>
		<td>
			<?php echo h($book['StackRoom']['name']); ?>
		</td>
		<td>
			<?php echo h($book['Status']['status']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</fieldset></br>
<fieldset>
	<legend><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
	</ul>
</fieldset>

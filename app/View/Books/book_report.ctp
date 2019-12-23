<fieldset>
	<legend><b>Books By Department</legend></b></br>
	<?php
	echo $this->Form->create('Book');
	echo "<table>";
		echo "<tr><td>" . $this->Form->label('Select Department:');
		echo "</td><td>";
		echo $this->Form->select("Book.department_id",$departments);
		echo "</td></tr>";	
		echo "</table>";
		echo "<br>";
		echo $this->Form->end(__('Submit'));
		?>
	</br>
	</fieldset></br>
	<?php if (!empty($books)){ ?>
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

<?php } ?>
<fieldset>
		<legend><b><?php echo __('Student Borrowings Listing');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Reg Number</th>
			<th>Book</th>
			<th>Date from</th>
			<th>Date to</th>
			<th>Date returned</th>
			<th>Book overdue?</th>
			<th>Created</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($studentBorrowings as $studentBorrowing): ?>
	<tr>
		<td><?php echo h($studentBorrowing['StudentBorrowing']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($studentBorrowing['StudentDetail']['reg_number']); ?>
		</td>
		<td>
			<?php echo h($studentBorrowing['Book']['name']); ?>
		</td>
		<td><?php echo h($studentBorrowing['StudentBorrowing']['date_from']); ?>&nbsp;</td>
		<td><?php echo h($studentBorrowing['StudentBorrowing']['date_to']); ?>&nbsp;</td>
		<td><?php echo h($studentBorrowing['StudentBorrowing']['date_returned']); ?>&nbsp;</td>
		<td><?php if($studentBorrowing['StudentBorrowing']['book_overdue']==0){
echo "No";}else{echo "Yes";}		?>&nbsp;</td>
		<td><?php echo h($studentBorrowing['StudentBorrowing']['created']); ?>&nbsp;</td>
		<td class="actions">
		<?php if ($system_group_id !=3){ ?> 
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentBorrowing['StudentBorrowing']['id'])); ?>
			<?php } ?>
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
<?php
	echo $this->Form->create('StudentBorrowing',array('action'=>'borrowing_excel'));
		echo $this->Form->end('/img/excel.png',array('alt'=>'Download Excel'));
		?>

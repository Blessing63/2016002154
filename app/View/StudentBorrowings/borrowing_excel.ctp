<fieldset>
		<legend><b><?php echo __('Student Borrowings Listing');?></b></legend></br>
		<h3>Huzhou University</h3>
		<h3>Date: <?php echo date('d-m-Y'); ?> </h3>
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
		
	</tr>
<?php endforeach; ?>
	</table>
</fieldset></br>
<?php
	echo $this->Form->create('StudentBorrowing',array('action'=>'borrowing_excel'));
		echo $this->Form->end('/img/excel.png',array('alt'=>'Download Excel'));
		?>

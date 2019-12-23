<div class="studentBorrowings form">
<?php echo $this->Form->create('StudentBorrowing');?>
	<fieldset>
	<legend><b><?php echo __('Add Student Borrowing'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('student_detail_id');
		echo "</br>";
		echo $this->Form->input('book_id');
		echo "</br>";
		echo $this->Form->input('date_from');
		echo "</br>";
		echo $this->Form->input('date_to');
		echo "</br>";
		echo $this->Form->input('date_returned');
		echo "</br>";
		echo $this->Form->input('book_overdue');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Student Borrowings'), array('action' => 'index'));?></li>	
	</ul>
</fieldset>

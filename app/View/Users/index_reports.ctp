
<?php //Systems Admin
 if($current_user['system_group_id']==1){?>
  <table><tr><td>
<fieldset>
		<legend><b><?php echo __('Manage Students'); ?></b></legend><br>
				<li><?php echo $this->Html->link(__('Books'), array('controller'=>'Books','action' => 'index')); ?></li></br>
		<ul><li><?php echo $this->Html->link(__('Student Details'), array('controller'=>'StudentDetails','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Departments'), array('controller'=>'Departments','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Programmes'), array('controller'=>'Programmes','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Publishers'), array('controller'=>'Publishers','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Stack Rooms'), array('controller'=>'StackRooms','action' => 'index')); ?></li></br>

		<li><?php echo $this->Html->link(__('Book Statuses'), array('controller'=>'Statuses','action' => 'index')); ?></li></br>
		</ul></br>
		
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('Manage Student Suspensions'); ?></b></legend></br>
		<ul>
		<li><?php echo $this->Html->link(__('Suspension Reasons'), array('controller'=>'SuspensionReasons','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Suspended Students'), array('controller'=>'SuspendedStudents','action' => 'index')); ?></li>
		</ul></br>
			
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('Libray  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Student Borrowing'), array('controller'=>'StudentBorrowings','action' => 'index')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Books Report'), array('controller'=>'Books','action' => 'book_report')); ?></li></ul></br>
</fieldset></td></tr></table>

<?php }?>
<?php 
//Mechant
if($current_user['system_group_id']==2){?>
<table><tr><td><fieldset>
		<legend><b><?php echo __('Manage Students'); ?></b></legend><br>
			<ul><li><?php echo $this->Html->link(__('Books'), array('controller'=>'Books','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Student Details'), array('controller'=>'StudentDetails','action' => 'index')); ?></li></br>
	
		<li><?php echo $this->Html->link(__('Book Statuses'), array('controller'=>'Statuses','action' => 'index')); ?></li></br>
		</ul></br>
		
</fieldset></td><td>
<fieldset>
		<legend><b><?php echo __('Manage Student Suspensions'); ?></b></legend></br>
		<ul>
		<li><?php echo $this->Html->link(__('Suspension Reasons'), array('controller'=>'SuspensionReasons','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Suspended Students'), array('controller'=>'SuspendedStudents','action' => 'index')); ?></li>
		</ul></br>
			
</fieldset></td>
<td><fieldset>
		<legend><b><?php echo __('Libray  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Student Borrowing'), array('controller'=>'StudentBorrowings','action' => 'index')); ?></li></ul></br>
	<ul><li><?php echo $this->Html->link(__('Books Report'), array('controller'=>'Books','action' => 'book_report')); ?></li></ul></br>
</fieldset></td></tr></table>

<?php }?>
<?php 
//Mechant
if($current_user['system_group_id']==3){?>
<table><tr><td><fieldset>
		<legend><b><?php echo __('Library Portal'); ?></b></legend><br>
		<ul><li><?php echo $this->Html->link(__('My Details'), array('controller'=>'StudentDetails','action' => 'index')); ?></li></br>
		<li><?php echo $this->Html->link(__('Book Catalogue'), array('controller'=>'Books','action' => 'index2')); ?></li>
		</ul></br>
</fieldset></td><td>
<fieldset>
		<legend><b><?php echo __('My Borrowing  Reports'); ?></b></legend></br>
	<ul><li><?php echo $this->Html->link(__('Student Borrowing'), array('controller'=>'StudentBorrowings','action' => 'index')); ?></li></ul></br>
</fieldset></td><tr></table>

<?php }?>

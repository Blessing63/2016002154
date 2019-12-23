<div class="suspendedStudents form">
<?php echo $this->Form->create('SuspendedStudent');?>
	<fieldset>
		<legend><b><?php echo __('Edit Suspended Student'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('student_detail_id',array('label'=>'Reg Number'));
		echo "</br>";
		echo $this->Form->input('suspension_reason_id');
		echo "</br>";
		echo $this->Form->input('active',array('options'=>array('No'=>'No','Yes'=>'Yes')));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

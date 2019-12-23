<div class="suspendedStudents form">
<?php echo $this->Form->create('SuspendedStudent');?>
	<fieldset>
		<legend><?php echo __('Add Suspended Student'); ?></legend>
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
</br>
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Suspended Students'), array('action' => 'index'));?></li>
		
	</ul>
</fieldset>

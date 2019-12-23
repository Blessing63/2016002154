<div class="studentDetails form">
<?php echo $this->Form->create('StudentDetail');?>
	<fieldset>
		<legend><?php echo __('Add Student Detail'); ?></legend></br>
	<?php
		echo $this->Form->input('reg_number',array('size'=>57));
		echo "</br>";
		echo $this->Form->input('firstname',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('lastname',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('programme_id');
		echo "</br>";
		echo $this->Form->input('level_of_study',array('options'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4)));
		echo "</br>";
		echo $this->Form->input('dob');
		echo "</br>";
		echo $this->Form->input('address',array('size'=>70));
		echo "</br>";
		echo $this->Form->input('email_address',array('size'=>57));
		echo "</br>";
		echo $this->Form->input('mobile',array('min'=>0));
		echo "</br>";
		echo $this->Form->input('suspended',array('options'=>array('No'=>'No','Yes'=>'Yes')));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?></br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Student Details'), array('action' => 'index'));?></li>
	</ul>
</fieldset>

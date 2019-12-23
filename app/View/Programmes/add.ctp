<div class="programmes form">
<?php echo $this->Form->create('Programme');?>
	<fieldset>
		<legend><b><?php echo __('Add Programme'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>70));
		echo "</br>";
		echo $this->Form->input('department_id');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Programmes'), array('action' => 'index'));?></li>
		
	</ul>
</fieldset>

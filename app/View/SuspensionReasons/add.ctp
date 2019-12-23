<div class="suspensionReasons form">
<?php echo $this->Form->create('SuspensionReason');?>
	<fieldset>
		<legend><b><?php echo __('Add Suspension Reason'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('reason',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Suspension Reasons'), array('action' => 'index'));?></li>
	</ul>
</fieldset>

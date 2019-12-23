<div class="suspensionReasons form">
<?php echo $this->Form->create('SuspensionReason');?>
	<fieldset>
		<legend><b><?php echo __('Edit Suspension Reason'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('reason',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>


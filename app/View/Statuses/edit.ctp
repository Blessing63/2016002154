<div class="statuses form">
<?php echo $this->Form->create('Status');?>
	<fieldset>
		<legend><b><?php echo __('Edit Status'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('status');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>


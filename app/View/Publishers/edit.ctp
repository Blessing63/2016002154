<div class="publishers form">
<?php echo $this->Form->create('Publisher');?>
	<fieldset>
		<legend><b><?php echo __('Edit Publisher'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>


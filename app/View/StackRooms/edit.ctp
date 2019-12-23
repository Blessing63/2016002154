<div class="stackRooms form">
<?php echo $this->Form->create('StackRoom');?>
	<fieldset>
		<legend><?php echo __('Edit Stack Room'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('floor');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>


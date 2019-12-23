<div class="stackRooms form">
<?php echo $this->Form->create('StackRoom');?>
	<fieldset>
		<legend><?php echo __('Add Stack Room'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('floor');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('List Stack Rooms'), array('action' => 'index'));?></li>
	</ul>
</fieldset>

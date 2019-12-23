<div class="publishers form">
<?php echo $this->Form->create('Publisher');?>
	<fieldset>
		<legend><b><?php echo __('Add Publisher'); ?></b></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Publishers'), array('action' => 'index'));?></li>
		
	</ul>
</fieldset>

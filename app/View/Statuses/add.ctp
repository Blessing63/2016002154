<div class="statuses form">
<?php echo $this->Form->create('Status');?>
	<fieldset>
		<legend><?php echo __('Add Status'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('status');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index'));?></li>
	
	</ul>
</fieldset>

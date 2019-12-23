<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo "</br>";
		echo $this->Form->input('name',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('author',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('year');
		echo "</br>";
		echo $this->Form->input('isbn',array('size'=>60));
		echo "</br>";
		echo $this->Form->input('publisher_id');
		echo "</br>";
		echo $this->Form->input('department_id');
		echo "</br>";
		echo $this->Form->input('stack_room_id');
		echo "</br>";
		echo $this->Form->input('status_id');
		echo "</br>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</br>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index'));?></li>
	</ul>
</fieldset>

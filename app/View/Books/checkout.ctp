<fieldset>
<legend><b><?php  echo __('Book Details');?></b></legend>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Title/Name</th>
			<th>Author</th>
			<th>Year</th>
			<th>ISBN</th>
			<th>Publisher</th>
			<th>Department</th>
			<th>Stack room</th>
			<th>Status</th>
		
	</tr>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['name']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['author']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['year']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
		<td>
			<?php echo h($book['Publisher']['name']); ?>
		</td>
		<td>
			<?php echo h($book['Department']['name']); ?>
		</td>
		<td>
			<?php echo h($book['StackRoom']['name']); ?>
		</td>
		<td>
		<?php if($book['Status']['id'] ==1){ ?>
		<font color ='Blue'>	<?php echo h($book['Status']['status']); ?></font>
		<?php }else{ ?>
		<font color ='Red'>	<?php echo h($book['Status']['status']); ?></font>
		<?php } ?>
		</td>
</table>
</fieldset></br>
<fieldset>
<legend><b><?php  echo __('Enter Student Reg Number to Checkout Book');?></b></legend>
<table>
  <tr><th>
  <?php	echo $this->Form->create('Book',array('action' => 'checkout'));?>

	<?php echo $this->Form->label('Enter Reg Number:');?>
	</th><td><?php
	echo $this->Form->input('book_id',array('type'=>'hidden','value'=>$book['Book']['id']));
	echo $this->Form->input('reg_number',array('label'=>false,'AutoComplete'=>'off','size'=>70));?></td><td><?php
	echo $this->Form->end(__('Sumbit')); ?></td></tr></table>

</fieldset>


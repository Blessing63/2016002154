<fieldset>
	<legend><b><?php echo __('Search Books'); ?></b></legend>
	<table>
  <tr><th>
  <?php	echo $this->Form->create('Book',array('action' => 'index2'));?>

	<?php echo $this->Form->label('Search By:');?>
	</th><td><?php
	$options = array('id'=>'Book#','name'=>'Title/Name');
	echo $this->Form->select('search_by',$options, array('empty'=>'Please Select','selected'=>false));?></td><td><?php
	echo $this->Form->input('search',array('label'=>false,'AutoComplete'=>'off','size'=>70));?></td><td><?php
	echo $this->Form->end(__('Search')); ?></td></tr></table>
  <div id = "content">
	</fieldset></br>
	<?php if (!empty($books)){ ?>
<fieldset>
		<legend><b><?php echo __('Books');?></b></legend>
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
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($books as $book): ?>
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
		<td class="actions">
		<?php if ($system_group_id !=3){ ?>
		<?php if($book['Status']['id'] ==1) { ?>
			<?php echo $this->Html->link(__('CheckOut'), array('action' => 'checkout', $book['Book']['id'])); ?> <?php } ?>
			<?php if($book['Status']['id'] ==2){ ?>
			<?php echo $this->Form->postLink(__('Return'), array('action' => 'return_book', $book['Book']['id']), null, __('Are you sure you want to retain Book # %s?', $book['Book']['id'])); ?>
		<?php } ?>
		<?php } ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</fieldset></br>
<?php } ?>

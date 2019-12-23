<fieldset>
	<legend><b><?php echo __('Student Details');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Reg number</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Programme</th>
			<th>Level</th>
			<th>Dob</th>
			<th>Address</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Suspended?</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($studentDetails as $studentDetail): ?>
	<tr>
		<td><?php echo h($studentDetail['StudentDetail']['id']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['reg_number']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['lastname']); ?>&nbsp;</td>
		<td>
			<?php echo h($studentDetail['Programme']['name']); ?>
		</td>
		<td><?php echo h($studentDetail['StudentDetail']['level_of_study']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['dob']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['address']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($studentDetail['StudentDetail']['suspended']); ?>&nbsp;</td>
		<td class="actions">
		<?php if($system_group_id !=3){ ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentDetail['StudentDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentDetail['StudentDetail']['id']), null, __('Are you sure you want to delete # %s?', $studentDetail['StudentDetail']['id'])); ?>
		<?php } ?></td>
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
<?php if($system_group_id !=3){ ?>
<fieldset>
	<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Student Detail'), array('action' => 'add')); ?></li>
	</ul>
</fieldset>
<?php } ?>

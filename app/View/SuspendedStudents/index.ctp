<fieldset>
		<legend><b><?php echo __('Suspended Students');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Student</th>
			<th>Suspension reason</th>
			<th>Active</th>
			<th>Created</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($suspendedStudents as $suspendedStudent): ?>
	<tr>
		<td><?php echo h($suspendedStudent['SuspendedStudent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($suspendedStudent['StudentDetail']['reg_number']); ?>
		</td>
		<td>
			<?php echo h($suspendedStudent['SuspensionReason']['reason']); ?>
		</td>
		<td><?php echo h($suspendedStudent['SuspendedStudent']['active']); ?>&nbsp;</td>
		<td><?php echo h($suspendedStudent['SuspendedStudent']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $suspendedStudent['SuspendedStudent']['id'])); ?>
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
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Suspended Student'), array('action' => 'add')); ?></li>
	
	</ul>
</fieldset>

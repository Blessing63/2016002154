<fieldset>
		<legend><b><?php echo __('Suspension Reasons');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Reason</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($suspensionReasons as $suspensionReason): ?>
	<tr>
		<td><?php echo h($suspensionReason['SuspensionReason']['id']); ?>&nbsp;</td>
		<td><?php echo h($suspensionReason['SuspensionReason']['reason']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $suspensionReason['SuspensionReason']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $suspensionReason['SuspensionReason']['id']), null, __('Are you sure you want to delete # %s?', $suspensionReason['SuspensionReason']['id'])); ?>
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
	</ul>
</fieldset></br>
<fieldset>
		<legend><b><?php echo __('Actions'); ?></b></legend>
	<ul>
		<li><?php echo $this->Html->link(__('New Suspension Reason'), array('action' => 'add')); ?></li>
	
	</ul>
</fieldset>

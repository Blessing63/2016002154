<fieldset>
		<legend><b><?php echo __('Statuses');?></b></legend>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Book Status</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($statuses as $status): ?>
	<tr>
		<td><?php echo h($status['Status']['id']); ?>&nbsp;</td>
		<td><?php echo h($status['Status']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $status['Status']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $status['Status']['id']), null, __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?></li>
		
	</ul>
</fieldset>

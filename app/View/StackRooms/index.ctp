<fieldset>
		<legend><b><?php echo __('Stack Rooms');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Name</th>
			<th>Floor</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($stackRooms as $stackRoom): ?>
	<tr>
		<td><?php echo h($stackRoom['StackRoom']['id']); ?>&nbsp;</td>
		<td><?php echo h($stackRoom['StackRoom']['name']); ?>&nbsp;</td>
		<td><?php echo h($stackRoom['StackRoom']['floor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stackRoom['StackRoom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stackRoom['StackRoom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stackRoom['StackRoom']['id']), null, __('Are you sure you want to delete # %s?', $stackRoom['StackRoom']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Stack Room'), array('action' => 'add')); ?></li>

	</ul>
</fieldset>

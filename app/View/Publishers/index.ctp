<fieldset>
		<legend><b><?php echo __('Publishers');?></b></legend></br>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>#</th>
			<th>Name</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($publishers as $publisher): ?>
	<tr>
		<td><?php echo h($publisher['Publisher']['id']); ?>&nbsp;</td>
		<td><?php echo h($publisher['Publisher']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $publisher['Publisher']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $publisher['Publisher']['id']), null, __('Are you sure you want to delete # %s?', $publisher['Publisher']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Publisher'), array('action' => 'add')); ?></li>
	</ul>
</fieldset>

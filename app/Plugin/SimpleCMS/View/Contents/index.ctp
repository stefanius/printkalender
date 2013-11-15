<div class="contents index">
	<h2><?php echo __("Pagina's"); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('section'); ?></th>
			<th><?php echo $this->Paginator->sort('urlpart'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contents as $content): ?>
	<tr>
		<td><?php echo h($content['Content']['id']); ?>&nbsp;&nbsp;</td>
		<td><?php echo h($content['Content']['title']); ?>&nbsp;&nbsp;</td>
		<td><?php echo h($content['Content']['section']); ?>&nbsp;&nbsp;</td>
		<td><?php echo h($content['Content']['urlpart']); ?>&nbsp;&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $content['Content']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $content['Content']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?>
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
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
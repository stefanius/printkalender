<div class="histories index">
	<h2><?php echo __('Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('day'); ?></th>
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('urlpart'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('pagecontent'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($histories as $history): ?>
	<tr>
		<td><?php echo h($history['History']['id']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['day']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['month']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['year']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['urlpart']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['title']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['pagecontent']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['created']); ?>&nbsp;</td>
		<td><?php echo h($history['History']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $history['History']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $history['History']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $history['History']['id']), null, __('Are you sure you want to delete # %s?', $history['History']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?></li>
	</ul>
</div>

<div class="markers index">
	<h2><?php echo __('Markers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lng'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($markers as $marker): ?>
	<tr>
		<td><?php echo h($marker['Marker']['id']); ?>&nbsp;</td>
		<td><?php echo h($marker['Marker']['lng']); ?>&nbsp;</td>
		<td><?php echo h($marker['Marker']['lat']); ?>&nbsp;</td>
		<td><?php echo h($marker['Marker']['title']); ?>&nbsp;</td>
		<td><?php echo h($marker['Marker']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $marker['Marker']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $marker['Marker']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $marker['Marker']['id']), null, __('Are you sure you want to delete # %s?', $marker['Marker']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Marker'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>

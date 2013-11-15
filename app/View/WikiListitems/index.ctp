<div class="wikiListitems index">
	<h2><?php echo __('Wiki Listitems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>			
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('day'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($wikiListitems as $wikiListitem): ?>
	<tr>
		<td><?php echo h($wikiListitem['WikiListitem']['id']); ?>&nbsp;</td>
		<td><?php echo h($wikiListitem['WikiListitem']['text']); ?>&nbsp;</td>
		<td><?php echo h($wikiListitem['WikiListitem']['year']); ?>&nbsp;</td>
		<td><?php echo h($wikiListitem['WikiListitem']['month_number']); ?>&nbsp;</td>
		<td><?php echo h($wikiListitem['WikiListitem']['day']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('To History'), array('action' => 'newhistory', $wikiListitem['WikiListitem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wikiListitem['WikiListitem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wikiListitem['WikiListitem']['id']), null, __('Are you sure you want to delete # %s?', $wikiListitem['WikiListitem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wiki Listitem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Links'), array('controller' => 'links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('controller' => 'links', 'action' => 'add')); ?> </li>
	</ul>
</div>

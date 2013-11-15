<div class="markers view">
<h2><?php  echo __('Marker'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($marker['Marker']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($marker['Marker']['lng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($marker['Marker']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($marker['Marker']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($marker['Marker']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Marker'), array('action' => 'edit', $marker['Marker']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Marker'), array('action' => 'delete', $marker['Marker']['id']), null, __('Are you sure you want to delete # %s?', $marker['Marker']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Markers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marker'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Histories'); ?></h3>
	<?php if (!empty($marker['History'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Urlpart'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Pagecontent'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($marker['History'] as $history): ?>
		<tr>
			<td><?php echo $history['id']; ?></td>
			<td><?php echo $history['day']; ?></td>
			<td><?php echo $history['month']; ?></td>
			<td><?php echo $history['year']; ?></td>
			<td><?php echo $history['urlpart']; ?></td>
			<td><?php echo $history['title']; ?></td>
			<td><?php echo $history['pagecontent']; ?></td>
			<td><?php echo $history['created']; ?></td>
			<td><?php echo $history['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'histories', 'action' => 'view', $history['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'histories', 'action' => 'edit', $history['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'histories', 'action' => 'delete', $history['id']), null, __('Are you sure you want to delete # %s?', $history['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

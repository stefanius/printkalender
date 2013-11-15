<div class="histories view">
<h2><?php  echo __('History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($history['History']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($history['History']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($history['History']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($history['History']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urlpart'); ?></dt>
		<dd>
			<?php echo h($history['History']['urlpart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($history['History']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagecontent'); ?></dt>
		<dd>
			<?php echo h($history['History']['pagecontent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($history['History']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($history['History']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit History'), array('action' => 'edit', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete History'), array('action' => 'delete', $history['History']['id']), null, __('Are you sure you want to delete # %s?', $history['History']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Histories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('action' => 'add')); ?> </li>
	</ul>
</div>

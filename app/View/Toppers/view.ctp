<div class="toppers view">
<h2><?php  echo __('Topper'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagecontent'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['pagecontent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($topper['Topper']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Topper'), array('action' => 'edit', $topper['Topper']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Topper'), array('action' => 'delete', $topper['Topper']['id']), null, __('Are you sure you want to delete # %s?', $topper['Topper']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Toppers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topper'), array('action' => 'add')); ?> </li>
	</ul>
</div>

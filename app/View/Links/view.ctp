<div class="links view">
<h2><?php  echo __('Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($link['Link']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Href'); ?></dt>
		<dd>
			<?php echo h($link['Link']['href']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($link['Link']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caption'); ?></dt>
		<dd>
			<?php echo h($link['Link']['caption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wiki Listitem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($link['WikiListitem']['text'], array('controller' => 'wiki_listitems', 'action' => 'view', $link['WikiListitem']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Link'), array('action' => 'edit', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Link'), array('action' => 'delete', $link['Link']['id']), null, __('Are you sure you want to delete # %s?', $link['Link']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Listitems'), array('controller' => 'wiki_listitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Listitem'), array('controller' => 'wiki_listitems', 'action' => 'add')); ?> </li>
	</ul>
</div>

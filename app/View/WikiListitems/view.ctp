<div class="wikiListitems view">
<h2><?php  echo __('Wiki Listitem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Raw Text'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['raw_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month Name'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['month_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month Number'); ?></dt>
		<dd>
			<?php echo h($wikiListitem['WikiListitem']['month_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wiki Listitem'), array('action' => 'edit', $wikiListitem['WikiListitem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wiki Listitem'), array('action' => 'delete', $wikiListitem['WikiListitem']['id']), null, __('Are you sure you want to delete # %s?', $wikiListitem['WikiListitem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wiki Listitems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Listitem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Links'), array('controller' => 'links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('controller' => 'links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Links'); ?></h3>
	<?php if (!empty($wikiListitem['Link'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Href'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Caption'); ?></th>
		<th><?php echo __('Wiki Listitem Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wikiListitem['Link'] as $link): ?>
		<tr>
			<td><?php echo $link['id']; ?></td>
			<td><?php echo $link['href']; ?></td>
			<td><?php echo $link['title']; ?></td>
			<td><?php echo $link['caption']; ?></td>
			<td><?php echo $link['wiki_listitem_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'links', 'action' => 'view', $link['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'links', 'action' => 'edit', $link['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'links', 'action' => 'delete', $link['id']), null, __('Are you sure you want to delete # %s?', $link['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Link'), array('controller' => 'links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

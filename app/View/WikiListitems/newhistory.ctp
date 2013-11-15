<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="histories form">

<?php echo $this->Form->create('History'); ?>
	<fieldset>
		<legend><?php echo __('Add History'); ?></legend>
	<?php
		echo $this->Form->input('day', array('value' => $wikiListitem['WikiListitem']['day']));
		echo $this->Form->input('month', array('value' => $wikiListitem['WikiListitem']['month_number']));
		echo $this->Form->input('year', array('value' => $wikiListitem['WikiListitem']['year']));
		echo $this->Form->input('urlpart');
		echo $this->Form->input('title');
        echo $this->Fck->ckedit('history.pagecontent', $wikiListitem['WikiListitem']['text']);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>




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
<div class="related">
	<h3><?php echo __('Related Links'); ?></h3>
	<?php if (!empty($wikiListitem['Link'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Href'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Caption'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wikiListitem['Link'] as $link): ?>
		<tr>
			<td><?php echo $this->Html->link(__($link['href']), $link['href']); ?></td>
			<td><?php echo $link['title']; ?></td>
			<td><?php echo $link['caption']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'links', 'action' => 'view', $link['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'links', 'action' => 'edit', $link['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'links', 'action' => 'delete', $link['id']), null, __('Are you sure you want to delete # %s?', $link['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
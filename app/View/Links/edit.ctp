<div class="links form">
<?php echo $this->Form->create('Link'); ?>
	<fieldset>
		<legend><?php echo __('Edit Link'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('href');
		echo $this->Form->input('title');
		echo $this->Form->input('caption');
		echo $this->Form->input('wiki_listitem_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Link.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Link.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Wiki Listitems'), array('controller' => 'wiki_listitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wiki Listitem'), array('controller' => 'wiki_listitems', 'action' => 'add')); ?> </li>
	</ul>
</div>

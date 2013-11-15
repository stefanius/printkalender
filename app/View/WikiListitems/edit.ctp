<div class="wikiListitems form">
<?php echo $this->Form->create('WikiListitem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wiki Listitem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('text');
		echo $this->Form->input('raw_text');
		echo $this->Form->input('year');
		echo $this->Form->input('day');
		echo $this->Form->input('month_name');
		echo $this->Form->input('month_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WikiListitem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WikiListitem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wiki Listitems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Links'), array('controller' => 'links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('controller' => 'links', 'action' => 'add')); ?> </li>
	</ul>
</div>

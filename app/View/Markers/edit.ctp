<div class="markers form">
<?php echo $this->Form->create('Marker'); ?>
	<fieldset>
		<legend><?php echo __('Edit Marker'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lng');
		echo $this->Form->input('lat');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('History');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Marker.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Marker.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Markers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>

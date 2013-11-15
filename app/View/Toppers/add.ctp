<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="toppers form">
<?php echo $this->Form->create('Topper'); ?>
	<fieldset>
		<legend><?php echo __('Add Topper'); ?></legend>
	<?php
		echo $this->Form->input('year');
		echo $this->Form->input('week');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Fck->ckedit('topper.pagecontent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Toppers'), array('action' => 'index')); ?></li>
	</ul>
</div>

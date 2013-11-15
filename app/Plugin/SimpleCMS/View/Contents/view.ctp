<div class="contents view">
<h2><?php  echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($content['Content']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($content['Content']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagecontent'); ?></dt>
		<dd>
			<?php echo h($content['Content']['pagecontent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo h($content['Content']['section']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urlpart'); ?></dt>
		<dd>
			<?php echo h($content['Content']['urlpart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified']); ?>
			&nbsp;
		</dd>
                
		<dt><?php echo __('Metadata'); ?></dt>
		<dd>
			<?php echo $this->Form->input('', array('type' => 'textarea', 'value'=> $this->Seo->generate($metadata))); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
	</ul>
</div>

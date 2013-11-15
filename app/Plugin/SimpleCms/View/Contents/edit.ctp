<div class="contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Pagina Bewerken'); ?></legend>
	<?php
            $fieldSettings = array('description' => array('type' => 'textarea', "onkeyup"=>"countChar(this, 170)", "onload"=>"countChar(this, 170)"));
            echo $this->element('autoform',array("fieldSettings"=>$fieldSettings) ); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

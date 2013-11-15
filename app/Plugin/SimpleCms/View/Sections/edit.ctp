<div class="contents form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Sectie Bewerken'); ?></legend>
	<?php
            $fieldSettings = array('description' => array('type' => 'textarea', "onkeyup"=>"countChar(this, 170)"));
            echo $this->element('autoform',array("fieldSettings"=>$fieldSettings) ); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
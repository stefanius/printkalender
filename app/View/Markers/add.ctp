<div class="markers form">
<?php echo $this->Form->create('Marker'); ?>
	<fieldset>
		<legend><?php echo __('Add Marker'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Markers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Histories'), array('controller' => 'histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'histories', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script>
   var geostring = window.prompt("Google Maps GEO info (maag leeg zijn)","");
    
    if(geostring.length > 5){
        var splitted = geostring.split('@');
        var latlng  = splitted[1].split(',');
        $("#MarkerLng" ).val(latlng[1]);
        $("#MarkerLat" ).val(latlng[0]);
        $("#MarkerTitle" ).val(splitted[0]);
    }
</script>
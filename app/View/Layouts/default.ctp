<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <?php
                if(isset($metadata)){
                    if(is_array($metadata)){
                        echo $this->Seo->generate($metadata);
                    }
                }            
            ?>
            <meta name="revisit-after" content="1 days">
            <meta name="googlebot" content="noodp">
            <title><?php echo $title_for_layout; ?></title>

		<!--[if lt IE 9]>
      		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    	<![endif]-->

    	<?php
                echo $this->Html->script('jquery/jquery-2.0.3.min.js');
    		echo $this->Bootstrap->load('min', array('responsive'=>true)); 
                echo $this->fetch('meta')."\n";
                echo $this->fetch('css')."\n";
                echo $this->fetch('script')."\n";
                echo $this->Html->css('custom.aditions.twitter')."\n";   
                echo $this->Html->script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
    	?>

	</head>
	<body>

	    <div id="container" >
                <div id="header">  
                      <?php echo $this->element('header'); ?>
                </div>
	        <div id="content">      
                     <?php echo $this->Html->getCrumbs(' > ', 'Home'); ?>
                     <?php echo $this->element('content'); ?>
                </div>
                <div id="footer" class="hidden-phone">
                      <?php echo $this->element('footer'); ?>                
                </div>
                
	    </div> <!-- /container -->

	</body>
    <?php echo $this->element('analytics'); ?>
</html>
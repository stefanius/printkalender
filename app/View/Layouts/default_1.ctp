<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php
                
                echo $this->Html->meta('description',$description )."\n";    

                if(isset($canonical)){
                    echo $this->Html->meta('canonical', $canonical, array('rel'=>'canonical', 'type'=>null, 'title'=>null))."\n";
                }
                
                if(isset($robots)){
                    echo $this->Html->meta(array('name' => 'robots', 'content' => $robots))."\n";
                }else{
                    echo $this->Html->meta(array('name' => 'robots', 'content' => 'INDEX,FOLLOW'))."\n";
                }
            ?>
            <title><?php echo $title_for_layout; ?></title>

		<!--[if lt IE 9]>
      		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    	<![endif]-->

    	<?php
    		echo $this->Bootstrap->load(); 
                echo $this->fetch('meta')."\n";
                echo $this->fetch('css')."\n";
                echo $this->fetch('script')."\n";
                echo $this->Html->css('custom.aditions.twitter')."\n";     
    	?>

	</head>
	<body>

	    <div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <?php echo $this->Html->link('DagVanDeWeek', '/', array('class' => 'brand')); ?>
	          <div class="container nav-collapse">
	            <ul class="nav">
	            	<li><?php echo $this->Html->link('Nieuws', '/nieuws/'); ?></li>
	            </ul>
                    
                    <?php echo $this->element('loginbar');  ?>
                     
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>

	    <div class="container-fluid" id="custcontainer">
	        <div class="row-fluid">
                    
	            <div class="span2">

	            </div><!--/span-->

	           	<div id="main-content" class="span7 pagebody">                       
                            <?php echo $this->Session->flash(); ?>

                            <?php echo $this->fetch('content'); ?>
                            <?php 
                                if(isset($showwhatislink)){
                                    if($showwhatislink===true){
                                        echo $this->element('watislink'); 
                                    }                                                
                                }
                            ?>
	            </div><!--/span-->
	            <div class="span3">
                        <br/><br/><br/>
	              <div class="well sidebar-nav">
                          <?php echo $this->element('today'); ?>
                      </div>
                    </div>
	        </div><!--/row-->
	      <footer id="custfooter">
                    <?php echo $this->element('footer'); ?>
	      </footer>

	    </div> <!-- /container -->

	</body>
        
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36212308-2']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    </script>
</html>


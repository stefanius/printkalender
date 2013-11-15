	        <div class="row-fluid">
                    
	            <div class="span2">
                           
	            </div><!--/span-->

                    <div id="main-content" class="span7">                       
                        <?php echo $this->Session->flash(); ?>
                        <article>
                            <?php echo $this->fetch('content'); ?>
                        </article>

                        <h3>Selecteer uw Jaarkalender</h3>
                        
                        <?php if(isset($year)): ?>
                            <p>Als u klaar bent met de Kalender van <?php echo $year ?> is het de overweging waard om ook eens te kijken naar onze andere kalenders. Naast het jaar <?php echo $year ?> zijn er genoeg andere kalenders die wij aanbieden. Elk jaar opnieuw.</p>
                        
                            <?php if($year==365): ?>
                                <p>Na de kalender 365 kunnen wij u vast overtuigen om ook naar de kalender van 1900, 1950, 2013 of zelfs 2015 te komen kijken. Natuurlijk willen wij wel alles over alle jaren weten, maar samen weten we natuurlijk meer. Dus als u iets weet uit het jaar 365, 1365, 1965 of welk jaar dan ook, willen wij dat weten! Zodat onze kalender 365, kalender 1900 en kalender 2013 completer wordt.</p>
                            <?php endif; ?>
                            
                            
                        <?php endif; ?>
                        <center>
                            <script type="text/javascript"><!--
                            google_ad_client = "ca-pub-1143505562670221";
                            /* Test */
                            google_ad_slot = "4350506819";
                            google_ad_width = 728;
                            google_ad_height = 90;
                            //-->
                            </script>
                            <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>     
                        </center>
                        <ul>
                        <?php
                            if(isset($year)){
                                
                                if($year==365){
                                    $years=array();
                                    for($i=1900;$i<2006;$i+=5){
                                        $years[]=$i;
                                    }
                                }else{
                                    $minYear = $year-10;
                                    $maxYear = $year+10;
                                    $years = range($minYear,$maxYear);                                    
                                }

                                foreach($years as $yr){ 
                                    if($yr > 1500 && $yr < 2020){
                                        echo '<li class="inline">'.$this->Html->link('Kalender '.$yr , '/kalender/'.$yr, array('rel'=>'follow')).'</li>';
                                    }                                
                                }
                            }
                        ?>
                        </ul>                        
  
                    </div><!--/span-->
                    
	            <div class="span2 hidden-phone">
                        <?php echo $this->element('calendartext'); ?>

                    </div>
	        </div><!--/row-->
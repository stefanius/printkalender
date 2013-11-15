<?php
    $this->Html->addCrumb($Section['Section']['title'], '/'.$Section['Section']['urlpart']);
?>
<h1><?php echo $Section['Section']['title']; ?></h1>
<?php

if(array_key_exists('pagecontent', $Section['Section'])){
   echo $Section['Section']['pagecontent']; 
}

foreach($list as $Item){
    echo '<div class="well">';
    echo $this->Html->link(ucfirst($Item['Content']['title']), '/'.$Section['Section']['urlpart'].'/'.$Item['Content']['urlpart'], array('rel'=>'follow'));
    echo '<br/>';
    echo $Item['Content']['description'];
    echo '</div>';
}

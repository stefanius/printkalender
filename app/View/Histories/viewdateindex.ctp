<?php
    $this->Html->addCrumb('Vandaag in het Verleden', '/historie');
    if(!is_null($year)){
        $this->Html->addCrumb($year, '/historie/'.$year);
    }
    
    if(!is_null($month)){
        $this->Html->addCrumb($months[$month], '/historie/'.$year.'/'.$month);
    }
 
    if(!is_null($day)){
        $this->Html->addCrumb($day.' '.$months[$month].' '.$year, '/historie/'.$year.'/'.$month.'/'.$day);
    }
?>

<h1><?php echo $pagetitle; ?></h1>
<p>Neem een kijkje in het verleden.</p>
<?php

foreach($History as $Item){
    echo '<div class="well">';
    echo $this->Html->link(ucfirst($Item['History']['title']), '/historie/'.$Item['History']['year'].'/'.$Item['History']['month'].'/'.$Item['History']['day'].'/'.$Item['History']['urlpart'], array('rel'=>'follow'));
    echo '<br/>';
    
    if(array_key_exists('description', $Item['History'])){
        echo $Item['History']['description'];
    }
    
    echo '</div>';
}

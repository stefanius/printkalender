<?php
    $this->Html->addCrumb('Vandaag in het Verleden', '/historie');
?>

<h1><?php echo $pagetitle; ?></h1>
<p>Hieronder een overzicht van alle jaren waar wij historische gegevens van hebben verzameld! Kijk rustig rond en laat u verbazen.</p>
<?php

foreach($History as $Item){
    echo '<div class="well">';
    echo $this->Html->link('Historisch overzicht '. ucfirst($Item['History']['year']), '/historie/'.$Item['History']['year'], array('rel'=>'follow'));
    echo '<br/>';
    echo $this->Html->link('Kalender van '. ucfirst($Item['History']['year']), '/kalender/'.$Item['History']['year'], array('rel'=>'follow'));
    echo '</div>';
}

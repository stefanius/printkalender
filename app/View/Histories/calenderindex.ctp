<?php 
    $this->Html->addCrumb('Overzicht Kalenders', '/kalender');
?>

<h1>Overzicht Kalenders</h1>
<p>Op deze pagina staan diverse kalenders van de afgelopen jaren. Van sommige jaren hebben wij al historische informatie opgeslagen, van sommige andere nog (lang) niet. De jaren waar wij u al iets over kunnen vertellen staan daarom bovenaan!</p>
<h2>Jaren met historische gegevens</h2>
    <?php

foreach($Years as $Year){
    echo '<div class="well">';
    echo $this->Html->link('Kalender '.$Year['History']['year'] , '/kalender/'.$Year['History']['year'], array('rel'=>'follow'));
    echo '</div>';
    
}

?>

<h2>Jaren zonder Historische gegevens</h2>

<?php

for($i=1850;$i< 2015; $i++){
    echo '<div class="well">';
    echo $this->Html->link('Kalender '.$i , '/kalender/'.$i, array('rel'=>'follow'));
    echo '</div>';    
}
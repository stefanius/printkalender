<?php
    $this->Html->addCrumb('Topper van de Week', '/topper-van-de-week');
    $this->Html->addCrumb('Jaaroverzicht '.$year, '/topper-van-de-week/'.$year);
?>

<h1><?php echo $pagetitle; ?></h1>
<p>Alle Toppers van de Week uit <?php echo $year; ?> allemaal overzichtelijk bij elkaar. 
    Wij hebben <?php echo count($Toppers); ?> toppers uit <?php echo $year; ?> voor u verzameld. U kunt ons ook 
altijd een tip sturen voor de ontbrekende weken!</p>
<?php

foreach($Toppers as $Topper){
    echo '<div class="well">';
    echo '<strong>Topper van de Week '.$Topper['Topper']['week'].'</strong>: ';
    echo $this->Html->link(ucfirst($Topper['Topper']['title']), '/topper-van-de-week/'.$Topper['Topper']['year'].'/'.$Topper['Topper']['week'], array('rel'=>'follow'));
    echo '</div>'; 
}

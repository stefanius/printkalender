<?php
    $this->Html->addCrumb('Topper van de Week', '/topper-van-de-week');
?>

<h1>Kies uw jaar - Topper van de Week</h1>
<p>Elk jaar en elke week is er een Topper van de Week. Deze website is wel jong, maar sommige echte Toppertjes gaan terug naar het grijze verleden! 
    Heeft u Topper-Tips, laat het ons weten. Zijn er onjuistheden? Kan de informatie uitgebreider? Heeft u achtergrondinfo? Wij willen het weten!
Want al onze Toppers verdienen Top pagina's en Top informatie.</p>

<p>Een Topper van de Week is een persoon (meestal non-fictie, maar er zijn uitzonderingen) die positief of negatief opviel op een bepaalde datum. Sommige Toppers
zijn echte helden, slimme koppen en toffe peren. Andere Toppers zijn niet zo Top als ze doen vermoeden, maar juist vanwege het gebrek aan slimheid of doorzettingsvermogen
worden ze een echte Anti-Topper.</p>
<?php

foreach($years as $year){
    echo '<div class="well">';
    echo $this->Html->link('Jaaroverzicht '.$year , '/topper-van-de-week/'.$year, array('rel'=>'follow'));
    echo '</div>'; 
}

<?php
    $this->Html->addCrumb('Overzicht Kalenders', '/kalender');
    $this->Html->addCrumb('Kalender '.$year, '/kalender/'.$year);
    $leapyear = date('L', mktime(1, 1, 1, 1, 1, $year));
?>

<h1>Kalender <?php echo $year;?></h1>
<?php
if(isset($Yearinfo['History']['pagecontent'])){
    echo $Yearinfo['History']['pagecontent'];
    
    if($leapyear==1){
        echo '<p>Ook leuk om te vermelden is dat '.$year.' een <strong>Schrikkeljaar</strong> is. '.$year.' telt dus 366 dagen, een dagje meer dan anders.</p>';
    }else{
        echo '<p>Ook leuk om te vermelden is dat '.$year.' GEEN <strong>Schrikkeljaar</strong> is. '.$year.' telt dus 365 dagen. In principe is het om de vier jaar een schrikkeljaar. Als het jaar door vier gedeeld kan worden, is het een schrikkeljaar. Al zijn er wel correcties en uitzonderingen op deze regel.</p>';
    }
    
}else{
    if($leapyear==1){
        echo '<p>Het jaar '.$year.' heeft 366 dagen. Dit komt omdat '.$year.' een schrikkeljaar is.</p>';
    }else{
        echo '<p>Het jaar '.$year.' is GEEN schrikkeljaar. Daarom heeft '.$year.' gewoon 365 dagen.</p></p>';
    }    
}

echo '<ul class="calendar-container">';

for($i=1; $i<13;$i++){
    
    echo '<li>'.$this->Calendar->generatemonth($i, $year).'</li>';
}
echo '</ul>';
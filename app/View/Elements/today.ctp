<?php
    $date = date('l jS \of F Y');
    $dayofweek = (int)date('N');
    $historicdate = false;

    $day = (int)date('d');
    $month = (int)date('m');
    $year = (int)date('Y');
    $week = (int)date('W');

    $prevyears = range($year-1, $year-100);

    foreach($prevyears as $y){
        $timestamp = gmmktime (0 ,0 ,0, $month, $day, $y);
        $historic_dayofweek = (int)date('N', $timestamp);
 
        if($historic_dayofweek===$dayofweek){
            $historicdate = date('l jS \of F Y', $timestamp);
            break;
        }

    }
?>

<strong>Datum</strong><br/>
<?php echo $date?><br/><br/>

<strong>Dag van de week</strong><br/>
<?php echo $dayofweek?><br/><br/>

<strong>Laatste keer zelfde datum op zelfde dag</strong><br/>
<?php echo $historicdate?><br/><br/>

<strong>Weeknummer</strong><br/>
<?php echo $week?>
<h3>Bijzondere Dagen</h3>
<?php

$dataArr[5]['year']=$year;
$dataArr[5]['month']=array(12);
$dataArr[5]['day']=array(24,25);
$dataArr[5]['title']='Kerst';

$dataArr[3]['year']=$year;
$dataArr[3]['month']=array(12);
$dataArr[3]['day']=array(5);
$dataArr[3]['title']='Sinterklaasavond';

$dataArr[2]['year']=$year;
$dataArr[2]['month']=array(12);
$dataArr[2]['day']=array(31);
$dataArr[2]['title']='Oudjaarsdag';

$dataArr[1]['year']=$year;
$dataArr[1]['month']=array(1);
$dataArr[1]['day']=array(1);
$dataArr[1]['title']='Nieuwjaarsdag';
ksort($dataArr);
echo $this->Calendar->generateTextBlock($dataArr);
<?php
    $this->Html->addCrumb('Topper van de Week', '/topper-van-de-week');
    $this->Html->addCrumb('Jaaroverzicht '.$Topper['Topper']['year'], '/topper-van-de-week/'.$Topper['Topper']['year']);
    $this->Html->addCrumb('Week '.$Topper['Topper']['week'], '/topper-van-de-week/'.$Topper['Topper']['year'].'/'.$Topper['Topper']['week']);
?>
<h1><?php echo $Topper['Topper']['title']; ?></h1>
<h3>Topper van de Week (Week <?php echo $Topper['Topper']['week']; ?> - <?php echo $Topper['Topper']['year']; ?>)</h3>
<?php echo $Topper['Topper']['pagecontent']; ?>
<p>
    <strong>Terug naar <?php echo $this->Html->link(__('Jaaroverzicht '.$year), array('action' => 'showtopper',$year)); ?></strong>
</p>
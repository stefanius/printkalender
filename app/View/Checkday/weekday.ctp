<h1>Is het al <?php echo  $DayResult['dayname'];?>?</h1>
<?php if($DayResult['doaction']===true): ?>
    <p>Jazeker, het is vandaag de hele dag <strong><?php echo  $DayResult['dayname'];?></strong></p>
<?php elseif($DayResult['dayname']=='Gisteren'): ?>
    <p>Nee, helaas. Het is vandaag geen <strong> <?php echo  $DayResult['dayname'];?></strong>.</p>
    <p>Hoewel het nu geen <strong> <?php echo  $DayResult['dayname'];?></strong> is,kunt u wel
        kijken of het nu <strong> <?php echo $this->Html->link('Vandaag', '/ishetvandaag/vandaag'); ?></strong> is. En als u niet van Gisteren bent, wilt u wellicht weten wanneer het <strong><?php echo $this->Html->link('Morgen', '/ishetvandaag/morgen'); ?></strong> is.</p>
<?php else: ?>
    <p>Nee, helaas. Het is vandaag geen <strong> <?php echo  $DayResult['dayname'];?></strong>.</p>
    <p>Hoewel het nu geen <strong> <?php echo  $DayResult['dayname'];?></strong> is,kunt u wel
        kijken of het nu <strong> <?php echo $this->Html->link('Vandaag', '/ishetvandaag/vandaag'); ?></strong> of <strong><?php echo $this->Html->link('Gisteren', '/ishetvandaag/gisteren'); ?></strong> is. En kom natuurlijk snel weer terug om te zien 
        of het een andere keer wel  <strong><?php echo $DayResult['dayname'];?></strong> is.</p>
<?php endif; ?>


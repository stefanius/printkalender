<?php
    $this->Html->addCrumb($Content['Section']['title'], '/'.$Content['Section']['urlpart']);
    $this->Html->addCrumb($Content['Content']['title'], '/'.$Content['Section']['urlpart'].'/'.$Content['Content']['urlpart']);
?>

<h1> <?php echo $Content['Content']['title']; ?></h1>

<?php echo $Content['Content']['pagecontent']; ?>
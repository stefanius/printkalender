<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
        <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <?php echo $this->Html->link('DagVanDeWeek', '/', array('class' => 'brand')); ?>
        <div class="container nav-collapse">
            <ul class="nav">
                <li><?php echo $this->Html->link('Nieuws', '/nieuws/'); ?></li>
                <li><?php echo $this->Html->link('Wat Is', '/watis/'); ?></li>

                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Topper van de Week <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/topper-van-de-week/2012">Jaaroverzicht 2012</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="/topper-van-de-week/2013">Jaaroverzicht 2013</a></li>
                      </ul>
                    </li>
            </ul>

            <?php echo $this->element('loginbar');  ?>

        </div>
        </div>
    </div>
</div>
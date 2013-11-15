<?php if($authUser===false): ?>
    <form class="navbar-form pull-right" method="post" id="login" action="<?php echo Router::url(array('plugin'=>null,'controller'=>'users', 'action'=>'login')) ?>">
        <input class="span2" type="text" name="data[User][username]"  placeholder="Username">
        <input class="span2" type="password" name="data[User][password]"  placeholder="Password">
        <button type="submit" class="btn">Sign in</button>
    </form> 
<?php else: ?>

    
    <form class="navbar-form pull-right" method="post" id="login" action="<?php echo Router::url(array('plugin'=>null, 'controller'=>'users', 'action'=>'logout')) ?>">
        <button type="submit" class="btn">Uitloggen</button>
    </form> 

    <ul class="nav pull-right">
        <?php echo $this->element('SimpleCms.header.isadmin');?>
    </ul>
<?php endif; ?>

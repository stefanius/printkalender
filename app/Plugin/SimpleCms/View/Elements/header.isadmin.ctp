<li class="dropdown">
    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content Pagina's <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
    <li role="presentation"><?php echo $this->Html->link(__('Index'), array('plugin'=>'simple_cms','controller'=>'contents', 'action' => 'index')); ?></li>
    <li role="presentation"><?php echo $this->Html->link(__('Toevoegen'), array('plugin'=>'simple_cms','controller'=>'contents', 'action' => 'add')); ?></li>
    </ul>
</li>

<li class="dropdown">
    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Secties <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
    <li role="presentation"><?php echo $this->Html->link(__('Index'), array('plugin'=>'simple_cms', 'controller'=>'sections', 'action' => 'index')); ?></li>
    <li role="presentation"><?php echo $this->Html->link(__('Toevoegen'), array('plugin'=>'simple_cms','controller'=>'sections', 'action' => 'add')); ?></li>
    </ul>
</li>
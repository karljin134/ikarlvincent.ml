<br><br><br>
<?php echo $this->request->params['action']; 
var_dump($opt['nav']);
?>
<nav id="mainNav" class="navbar <?php echo in_array($this->request->params['action'], $opt['nav']) ? 'navbar-default' : 'navbar-primary'?> navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <?php echo $this->Html->link(__('iKarlVincent'), array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')); ?>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">iKarlVincent</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo $this->Html->link(__('About'), array('controller' => 'pages', 'action' => 'about')); ?>
                        <!-- <a class="page-scroll" href="#about">About</a> -->
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Blog'), array('controller' => 'blogs', 'action' => 'index')); ?>
                        <!-- <a class="page-scroll" href="#features">Blog</a> -->
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Contact'), array('controller' => 'pages', 'action' => 'contact')); ?>
                        <!-- <a class="page-scroll" href="#contact">Contact</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

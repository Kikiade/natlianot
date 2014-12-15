<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Natlia</title>
    
    <!-- core CSS -->
    <link href="<?php echo $this->webroot; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>css/main.css" rel="stylesheet">
    <link href="<?php echo $this->webroot; ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot; ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot; ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot; ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot; ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="background-color:#4e3b30">
    <header>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $this->Html->url(array('controller' => 'Home', 'action' => 'index')); ?>">HOME</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'About', 'action' => 'index')); ?>">ABOUT US</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'Collection', 'action' => 'index')); ?>">COLLECTION</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'Galery', 'action' => 'index')); ?>">GALERY</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'Friends', 'action' => 'index')); ?>">FRIENDS</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'Contact', 'action' => 'index')); ?>">CONTACT US</a></li>
                    </ul>
                    </div>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

        <?php echo $this->fetch('content'); ?>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div align="center">
                    &copy; 2014 <a target="_blank" href="#" title="">DONE COLLEAGUE</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo $this->webroot; ?>js/jquery.js"></script>
    <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $this->webroot; ?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/main.js"></script>
    <script src="<?php echo $this->webroot; ?>js/wow.min.js"></script>
</body>
</html>
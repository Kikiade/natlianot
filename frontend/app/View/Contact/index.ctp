<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Natlia</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body style="background-color:#4e3b30">    
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center"></div>
                    <div class="col-sm-7 map-content"> 
                        <div class="center">        
                            <h2>For more products & info </h2>
                                <p class="lead"> 
                                    Royal Palace Office Block C-5
                                    Jl. Prof Dr Soepomo 178A
                                    Tebet – Jakarta Selatan - Indonesia
                                    <br>
                                    Contact :   natlia@lokha.co.id
                                    <br>
                                    +62-811 860 6538
                                </p>
                        </div>

                        <?php echo $this->Form->create('Contek', array('id' => 'main-contact-form', 'class' => 'contact-form')); ?>
                            <div class="col-sm-5 col-sm-offset-1">
                                <?php
                                    echo $this->Form->input('name', array(
                                      'label'   =>  array('style' => "color:#eead0e", 'text' => 'Name*'),
                                      'class'   =>  'form-control',
                                      'between' =>  '<div class="form-group">',
                                      'after'   =>  '</div>'
                                      ));
                                ?>

                                <?php
                                    echo $this->Form->input('email', array(
                                      'label'   =>  array('style' => "color:#eead0e", 'text' => 'Email*'),
                                      'class'   =>  'form-control',
                                      'between' =>  '<div class="form-group">',
                                      'after'   =>  '</div>'
                                      ));
                                ?>

                                <?php
                                    echo $this->Form->input('subject', array(
                                      'label'   =>  array('style' => "color:#eead0e", 'text' => 'Subject*'),
                                      'class'   =>  'form-control',
                                      'between' =>  '<div class="form-group">',
                                      'after'   =>  '</div>'
                                      ));
                                ?>
                            </div>

                            <div class="col-sm-5">
                                <?php
                                    echo $this->Form->input('pesan', array(
                                      'label'   =>  array('style' => "color:#eead0e", 'text' => 'Message*'),
                                      'class'   =>  'form-control',
                                      'between' =>  '<div class="form-group">',
                                      'after'   =>  '</div>'
                                      ));
                                ?>

                                <?php
                                    echo $this->Form->input('status', array(
                                      'label'     =>  array('style' => "color:#eead0e", 'text' => 'Status*'),
                                      'type'      =>  'hidden',
                                      'options'   =>  array('0' => 'Not Active', '1' => 'Active'),
                                      'value'     =>  '1',
                                      'class'     =>  'form-control',
                                      'between'   =>  '<div class="form-group">',
                                      'after'     =>  '</div>'
                                      ));
                                ?>
                        <?php echo $this->Form->end('send', array('label' => 'Send Message', 'class' => 'btn btn-primary btn-lg', 'between' => '<div class="form-group">', 'after' =>  '</div>', 'type' => 'submit'));?> 
                          </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
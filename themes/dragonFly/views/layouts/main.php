<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dragonfly, free website template</title>
        <meta name="keywords" content="dragonfly, free website templates, one page layout, jquery" />
        <meta name="description" content="Dragonfly is one-page layout using jQuery and it is free website template from templatemo.com" />

    	<!-- <link href="templatemo_style.css" type="text/css" rel="stylesheet" /> -->
        <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
        <!-- <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
        <script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>

        <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
        <script type="text/JavaScript" src="js/slimbox2.js"></script>  -->
        <?php
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/templatemo_style.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/slimbox2.css','screen');

            Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/jquery.scrollTo-min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/jquery.localscroll-min.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/init.js');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/slimbox2.js');
        ?>

    	

        <!-- <link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" /> -->
        <!-- <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" /> -->
        <?php
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/orman.css','screen');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/nivo-slider.css','screen');
        ?>
        <?php
            // cascsa
        ?>
    </head>
    <body>
        <div id="templatemo_wrapper">
            <div id="templatemo_header">
                <div id="site_title">
                    <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_378_dragonfly" rel="nofollow" target="_parent"></a>
                </div>
                <ul class="nav_menu">
                    <li>
                        <a href="#home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#gallery">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createAbsoluteUrl('site/login'); ?>">Login</a>
                    </li>
                </ul>
                <div class="social_button">
                    <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/facebook.png" alt="Facebook" /></a>
                    <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/flickr.png" alt="Flickr" /></a>
                    <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/twitter.png" alt="Twitter" /></a>
                    <div class="clear"></div>
                </div>
                <p>© 2072 Company Name<br />
                    <a class="no_links" href="http://ru.mystockphoto.com" title="фото бесплатно from ru.mystockphoto.com"  target="_blank">фото бесплатно</a>
                    <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_378_dragonfly" rel="nofollow" target="_parent">Dragonfly</a> by<br />
                    <a href="http://www.templatemo.com" rel="nofollow" target="_parent">templatemo</a><br />
                </p>
            </div>
            <div id="templatemo_main">
                
                <?php echo $content; ?>

            </div>
        </div>
    </body>
    <!--<script type='text/javascript' src='js/logging.js'></script>-->
</html>
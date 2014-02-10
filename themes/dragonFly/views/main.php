<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dragonfly, free website template</title>
<meta name="keywords" content="dragonfly, free website templates, one page layout, jquery" />
<meta name="description" content="Dragonfly is one-page layout using jQuery and it is free website template from templatemo.com" />

	<link href="templatemo_style.css" type="text/css" rel="stylesheet" />
    <?php
    Yii::app()->clientScript->cssFile(Yii::app()->themes->baseUrl.'/assets/templatemo_style.css');
    ?>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
	<script type="text/javascript" src="js/init.js"></script>

    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<?php
// cascsa
?>
</head> 
<body> 
<div id="templatemo_wrapper">
<div id="templatemo_header">
    <div id="site_title"><a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_378_dragonfly" rel="nofollow" target="_parent"></a></div>
    <ul class="nav_menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#gallery">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="social_button">
    	<a href="#"><img src="images/facebook.png" alt="Facebook" /></a>
		<a href="#"><img src="images/flickr.png" alt="Flickr" /></a>
		<a href="#"><img src="images/twitter.png" alt="Twitter" /></a>
        <div class="clear"></div>
    </div>
    <p>
    © 2072 Company Name<br />
    <a class="no_links" href="http://ru.mystockphoto.com" title="фото бесплатно from ru.mystockphoto.com"  target="_blank">фото бесплатно</a>
    <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_378_dragonfly" rel="nofollow" target="_parent">Dragonfly</a> by<br />
    <a href="http://www.templatemo.com" rel="nofollow" target="_parent">templatemo</a><br />
</p>
    
</div>
<div id="templatemo_main">
	<div id="content"> 
       	<div id="home" class="home_slider">
             <div class="theme-orman">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/01.jpg" alt="Dragonfly 1" rel="images/slider/01_thumb.jpg" />
                    <img src="images/slider/02.jpg" alt="Dragonfly 2" rel="images/slider/02_thumb.jpg" />
                    <img src="images/slider/03.jpg" alt="Dragonfly 3" rel="images/slider/03_thumb.jpg" />
                    <img src="images/slider/04.jpg" alt="Dragonfly 4" rel="images/slider/04_thumb.jpg" />
                    <img src="images/slider/05.jpg" alt="Dragonfly 5" rel="images/slider/05_thumb.jpg" />
                </div>
            </div> 
            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    controlNavThumbs:true,
					controlNavThumbsFromRel:true,
					directionNav:false, // Next and Prev
					keyboardNav:true, // Use left and right arrows
					pauseOnHover:true // Stop animation while hovering
                });
            });
            </script>
       	</div>
        <div class="section section_with_padding" id="about"> 
            <h1>About</h1>
            <div class="img_border img_fl"> 
            	<a href="http://www.templatemo.com" rel="nofollow"><img src="images/templatemo_image_01.jpg" alt="image 1" /></a>	
          	</div>
            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius, ut fermentum sem adipiscing id.</em></p>
            <p>Sed vitae aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. Cras in erat purus. Aliquam odio nibh, suscipit quis venenatis vitae, fringilla at quam. Proin turpis nibh, vestibulum non dignissim a, blandit at nulla mattis sapien. </p>	    
            <div class="clear h40"></div>
            <div class="img_border img_fr">
                <img src="images/templatemo_image_02.jpg" alt="image 2" />	
            </div>
            <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius, ut fermentum sem adipiscing id.</em></p>
            <p>Sed vitae aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. Cras in erat purus. Aliquam odio nibh, suscipit quis venenatis vitae, fringilla at quam. Proin turpis nibh, vestibulum non dignissim a, blandit at nulla mattis sapien. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
        </div> 
        <div class="section section_with_padding" id="services"> 
            <h1>Services</h1>
            <div class="half right">
	            <div class="img_border img_nom">
	                <a href="http://www.templatemo.com" rel="nofollow"><img src="images/templatemo_image_04.jpg" alt="image 4" /></a>
                </div>
            	<ul class="list_bullet">
                    <li>Maecenas ac odio ipsum donec</li>
                    <li>Fusce risus tortor, interdum</li>
                    <li>Proin facilisis ullamcorper</li>
                    <li>Sed vel justo quis ligula</li>
                    <li>Ut tristique sagittis arcu</li>
                    <li>Maecenas ac odio ipsum donec</li>
                    <li>Fusce risus tortor, interdum</li>
                    <li>Proin facilisis ullamcorper</li>
                </ul>
                
            </div>
            <div class="half left">
                <div class="img_border img_nom">
	                <img src="images/templatemo_image_03.jpg" alt="image 3" />	
                </div>
            	<p><em>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit amet varius at, placerat ut felis. </em></p>
            <p>Donec vitae tortor non ipsum tristique condimentum ac ac nulla. Etiam sagittis iaculis dolor ut euismod. Nam faucibus, risus at consequat malesuada, urna turpis sagittis libero, sodales hendrerit dui arcu et nisi. Praesent pulvinar, dolor id lacinia pulvinar, mi ligula tempor libero, et semper sem dolor et elit.</p>
            </div>
        </div> 
        <div class="section" id="gallery"> 
            <ul id="gallery_wrapper">
            	<li><a href="images/gallery/09-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/09.jpg" alt="image 9" /></a></li>
                <li><a href="images/gallery/10-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/10.jpg" alt="image 10" /></a></li>
                <li><a href="images/gallery/11-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/11.jpg" alt="image 11" /></a></li>
                <li><a href="images/gallery/12-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/12.jpg" alt="image 12" /></a></li>
                <li><a href="images/gallery/01-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/01.jpg" alt="image 01" /></a></li>
                <li><a href="images/gallery/02-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/02.jpg" alt="image 02" /></a></li>
                <li><a href="images/gallery/03-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/03.jpg" alt="image 03" /></a></li>
                <li><a href="images/gallery/04-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/04.jpg" alt="image 04" /></a></li>
                <li><a href="images/gallery/05-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/05.jpg" alt="image 05" /></a></li>
                <li><a href="images/gallery/06-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/06.jpg" alt="image 06" /></a></li>
                <li><a href="images/gallery/07-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/07.jpg" alt="image 07" /></a></li>
                <li><a href="images/gallery/08-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/08.jpg" alt="image 08" /></a></li>                
                <li><a href="images/gallery/09-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/09.jpg" alt="image 09" /></a></li>
                <li><a href="images/gallery/10-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/10.jpg" alt="image 10" /></a></li>
                <li><a href="images/gallery/11-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/11.jpg" alt="image 11" /></a></li>
                <li><a href="images/gallery/12-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/12.jpg" alt="image 12" /></a></li>
                <li><a href="images/gallery/01-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/01.jpg" alt="image 01" /></a></li>
                <li><a href="images/gallery/02-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/02.jpg" alt="image 02" /></a></li>
                <li><a href="images/gallery/03-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/03.jpg" alt="image 03" /></a></li>
                <li><a href="images/gallery/04-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/04.jpg" alt="image 04" /></a></li>
            </ul>	
        </div> 
        
        <div class="section section_with_padding" id="contact"> 
            <h1>Contact Us</h1> 
            <div class="half left">
                <h4>Quick Contact</h4>
                <div id="contact_form">
                    <form method="post" name="contact" action="#contact">
                        <label for="author">Name:</label> 
                        	<input name="author" type="text" class="required input_field" id="author" maxlength="30" />
                        <label for="email">Email:</label> 
                        	<input name="email" type="text" class="validate-email required input_field" id="email" maxlength="30" />
                  <label for="message">Message:</label> 
                        	<textarea id="message" name="text" rows="0" cols="0" class="required"></textarea>
                        <input type="submit" class="submit_btn left" name="submit" id="submit" value="Send" />
                        <input type="reset" class="submit_btn right" name="Reset" id="reset" value="Reset" />
                    </form>
                </div>
            </div>
            
            <div class="half right">
                <h4>Address</h4>
                130-310 Duis lacinia dictum, <br />
                Vestibulum auctor, 10990<br />
            Nam rhoncus, diam a mollis<br />
                
                <div class="clear h20"></div>
                <div class="img_nom img_border"><a href="http://goo.gl/VZrm0H" target="_blank"><img src="images/location.jpg" alt="our location" width="230" height="230" /></a></div>
            </div>
        </div> 
    </div> 
</div>

</div>

</body> 
<script type='text/javascript' src='js/logging.js'></script>
</html>
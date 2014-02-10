<div id="home" class="home_slider">
    <div class="theme-orman">
        <div id="slider" class="nivoSlider">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/anne.jpg" alt="Dragonfly 1" rel="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/anne_thumb.jpg" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/erba.jpg" alt="Dragonfly 2" rel="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/erba_thumb.jpg" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/devy.jpg" alt="Dragonfly 3" rel="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/devy_thumb.jpg" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/04.jpg" alt="Dragonfly 4" rel="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/04_thumb.jpg" />
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/05.jpg" alt="Dragonfly 5" rel="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/slider/05_thumb.jpg" />
        </div>
    </div> 
    <!--<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>-->
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.nivo.slider.pack.js"></script>
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
        <a href="http://www.templatemo.com" rel="nofollow"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/templatemo_image_01.jpg" alt="image 1" /></a>
    </div>
    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius, ut fermentum sem adipiscing id.</em></p>
    <p>Sed vitae aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. Cras in erat purus. Aliquam odio nibh, suscipit quis venenatis vitae, fringilla at quam. Proin turpis nibh, vestibulum non dignissim a, blandit at nulla mattis sapien. </p>
    <div class="clear h40"></div>
    <div class="img_border img_fr">
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/templatemo_image_02.jpg" alt="image 2" />
    </div>
    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius, ut fermentum sem adipiscing id.</em></p>
    <p>Sed vitae aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. Cras in erat purus. Aliquam odio nibh, suscipit quis venenatis vitae, fringilla at quam. Proin turpis nibh, vestibulum non dignissim a, blandit at nulla mattis sapien. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
</div>
<div class="section section_with_padding" id="services">
    <h1>Services</h1>
    <div class="half right">
        <div class="img_border img_nom">
            <a href="http://www.templatemo.com" rel="nofollow"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/templatemo_image_04.jpg" alt="image 4" /></a>
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
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/templatemo_image_03.jpg" alt="image 3" />
        </div>
        <p><em>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit amet varius at, placerat ut felis. </em></p>
        <p>Donec vitae tortor non ipsum tristique condimentum ac ac nulla. Etiam sagittis iaculis dolor ut euismod. Nam faucibus, risus at consequat malesuada, urna turpis sagittis libero, sodales hendrerit dui arcu et nisi. Praesent pulvinar, dolor id lacinia pulvinar, mi ligula tempor libero, et semper sem dolor et elit.</p>
    </div>
</div>
<div class="section" id="gallery">
    <ul id="gallery_wrapper">
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/09-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/09.jpg" alt="image 9" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/10-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/10.jpg" alt="image 10" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/11-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/11.jpg" alt="image 11" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/12-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/12.jpg" alt="image 12" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/01-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/01.jpg" alt="image 01" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/02-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/02.jpg" alt="image 02" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/03-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/03.jpg" alt="image 03" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/04-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/04.jpg" alt="image 04" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/05-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/05.jpg" alt="image 05" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/06-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/06.jpg" alt="image 06" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/07-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/07.jpg" alt="image 07" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/08-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/08.jpg" alt="image 08" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/09-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/09.jpg" alt="image 09" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/10-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/10.jpg" alt="image 10" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/11-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/11.jpg" alt="image 11" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/12-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/12.jpg" alt="image 12" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/01-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/01.jpg" alt="image 01" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/02-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/02.jpg" alt="image 02" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/03-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/03.jpg" alt="image 03" /></a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/04-l.jpg" rel="lightbox[gallery]"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/gallery/04.jpg" alt="image 04" /></a>
        </li>
    </ul>
</div>
<div class="section section_with_padding" id="contact">
    <h1>Contact Us</h1> 
    <div class="half left">
        <h4>Quick Contact</h4>
        <div id="contact_form">
            <form method="post" name="contactForm" action="#contact">
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
        <div class="img_nom img_border"><a href="http://goo.gl/VZrm0H" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/location.jpg" alt="our location" width="230" height="230" /></a></div>
    </div>
</div>
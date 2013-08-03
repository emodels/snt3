<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.cycle.lite.js');
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#menu_home a').addClass('current');
    $('.slideshow').cycle({
	fx: 'fade'
    });    
    "
    , CClientScript::POS_END    
);
?>
<style type="text/css">
    #li_mobile {
        /*width: 350px;*/
    }
</style>
<div class="row-2" style="">
        <div class="slider-shadow"></div>
        <div class="main">
            <div class="slider">
                <ul class="items">
                    <li>
                        <img src="images/slide-1.jpg" alt="">
                        <div class="banner"><span class="slider-banner1"></span></div>
                    </li>
                    <li>
                        <img src="images/slide-2.jpg" alt="">
                        <div class="banner"><span class="slider-banner2"></span></div>
                    </li>
                    <li>
                        <img src="images/slide-3.jpg" alt="">
                        <div class="banner"><span class="slider-banner3"></span></div>
                    </li>
                    <li>
                        <img src="images/slide-4.jpg" alt="">
                        <div class="banner"><span class="slider-banner4"></span></div>
                    </li>
                </ul>
                <div class="controls">
                    <a href="#" class="next">next</a>
                    <a href="#" class="prev">previous</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row-3">
        <div class="main">
            <div class="wrapper">
                <ul id="mycarousel" class="jcarousel-skin-tango">
                    <li>
                        <div class="list-number">01.</div>
                        <div class="extra-wrap">
                            <div class="topic">IT Outsourcing</div>
                            <p class="color-1 p0">There are many reasons that companies outsource various ...</p>
                            <div class="alignright">
                                <a href="it-outsourcing" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="list-number">02.</div>
                        <div class="extra-wrap">
                            <div class="topic">Hosted Solutions</div>
                            <p class="color-1 p0">Every business has unique IT requirements, and that's why we ...</p>
                            <div class="alignright">
                                <a href="hosted-solutions" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="list-number">03.</div>
                        <div class="extra-wrap">
                            <div class="topic">Talent Acquisition</div>
                            <p class="color-1 p0">Talent acquisition is the process of finding and acquiring skilled ...</p>
                            <div class="alignright">
                                <a href="talent-acquisition" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="list-number">04.</div>
                        <div class="extra-wrap">
                            <div class="topic">Offshore Services</div>
                            <p class="color-1 p0">IT Offshore Services are those that are offered by companies in ...</p>
                            <div class="alignright">
                                <a href="offshore-service-offering" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="list-number">05.</div>
                        <div class="extra-wrap">
                            <div class="topic">Software Solutions</div>
                            <p class="color-1 p0">We provide software development, quality assurance, application ...</p>
                            <div class="alignright">
                                <a href="about-us" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="list-number">06.</div>
                        <div class="extra-wrap">
                            <div class="topic">Web Development</div>
                            <p class="color-1 p0">Stylish web Design using industry leading tools and technologies ...</p>
                            <div class="alignright">
                                <a href="about-us" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li id="li_mobile">
                        <div class="list-number">07.</div>
                        <div class="extra-wrap">
                            <div class="topic">Mobile Apps</div>
                            <p class="color-1 p0">High quality mobile application development services ...</p>
                            <div class="alignright">
                                <a href="mobile-application-development" class="link-1">read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content" style="padding-bottom: 0px">
        <div class="main">
            <div class="wrapper">
                <article class="col-1" style="padding: 0 35px 0 0">
                    <h2 class="prev-indent-bot" style="padding-bottom: 3px"><strong>Our Clients</strong></h2>
                    <div class="slideshow">
                        <?php foreach(glob('./images/partners/*.*') as $filename){ ?>
                            <img src="<?php echo $filename; ?>" width="225" height="125" />
                        <?php } ?>
                    </div>
                    <div>
                        <h2 class="prev-indent-bot"><strong>Our Mission</strong></h2>
                        <p style="text-align: justify">Solving business challenges with the right technology.</p> 
                    </div>
                </article>
                <article class="col-2">
                    <h2 style="padding-bottom: 20px;">Technology</h2>
                    <ul class="list-1 spacing-bot">
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Test Automation</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Test Data Management</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Hosted Web solutions</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Customized App Development</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">IT Security</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Data Management</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Data Governance</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Data Migration</a></li>
                        <li><a href="#" style="cursor: default" onclick="js:return false;">Meta Data Management</a></li>
                    </ul>
                </article>
                <article class="col-3">
                    <h2 class="p2">Our work is dedicated to the prosperity of our clients!</h2>
                    <p class="p2" style="padding-top: 10px">We practice reusability, and our library of methods and components are an important part of our development framework. We are disciplined to best standards that are widely used in the IT industry.</p>
                    <div class="wrapper indent-bot" style="padding-top: 10px">
                        <figure class="img-indent1"><a class="lightbox-image" href="images/image-blank.png" data-gal="prettyPhoto[gallery1]"><img class="img-box" src="images/page1-img1.jpg" alt=""></a></figure>
                        <div class="extra-wrap">
                            <h6>We have many different tools<br> and methods for your busi-<br>ness developing.</h6>
                            We also understand the importance of proper documentation.
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->


<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#menu_home a').addClass('current');"
    , CClientScript::POS_END    
);
?>
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
                </ul>
            </div>
        </div>
    </div>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article class="col-1">
                    <div>
                        <h2 class="prev-indent-bot"><strong>Our Mission is, </strong></h2>
                        <h4 class="side">Solving business challenges with the right technology.</h4> 
                        <h2 class="prev-indent-bot"><strong>Our Process is, </strong></h2>
                        <h4 class="side"><strong>powerful, </strong>simple, and unique.</h4>
                        <p class="p2">We would work with established business partners in sourcing technical experts, to ensure adherence to the primary goals and objectives.</p>
                        <p class="p2">We are experienced in recruiting for overseas postings. We are also experienced in recruiting overseas for domestic postings.</p>
                    </div>
                </article>
                
                <article class="col-2">
                    <h2 style="padding-bottom: 10px;">Technology</h2>
                    <ul class="list-1 spacing-bot">
                        <li><a href="#">PHP / MySQL</a></li>
                        <li><a href="#">ASP.NET C# / VB.NET</a></li>
                        <li><a href="#">Ajax / CSS / XML / XSLT</a></li>
                        <li><a href="#">.NET framework</a></li>
                        <li><a href="#">Yii framework</a></li>
                        <li><a href="#">JQuery and client-side scripting</a></li>
                        <li><a href="#">Microsoft SQL Server</a></li>
                        <li><a href="#">Data mining and migration</a></li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Implementation</a></li>
                    </ul>
                    <h5 class="p0" style="padding-bottom: 15px">Call us for enquiry:</h5>
                    <h4 style="padding-bottom: 10px;">+61431 108 137</h4>
                    <h4>+61425 732 711</h4>
                </article>
                <article class="col-3">
                    <h2 class="p2">Our work is dedicated to the prosperity of our clients!</h2>
                    <p class="p2">We practice reusability, and our library of methods and components are an important part of our development framework. We are disciplined to best standards that are widely used in the IT industry. Our project model can be tailored to suit the requirements of each project and the users.</p>
                    <div class="wrapper indent-bot">
                        <figure class="img-indent1"><a class="lightbox-image" href="images/image-blank.png" data-gal="prettyPhoto[gallery1]"><img class="img-box" src="images/page1-img1.jpg" alt=""></a></figure>
                        <div class="extra-wrap">
                            <h6>We have many different tools<br> and methods for your busi-<br>ness developing.</h6>
                            We also understand the importance of proper documentation.
                        </div>
                    </div>
                    <div class="wrapper p1">
                        <figure class="img-indent1"><a class="lightbox-image" href="images/image-blank.png" data-gal="prettyPhoto[gallery2]"><img class="img-box" src="images/page1-img2.jpg" alt=""></a></figure>
                        <div class="extra-wrap">
                            <h6>Our professional experts are always ready to give you full and true information about the fran-<br>chise business.</h6>
                            Technically proficient staff plays a key role in helping define business requirements.
                        </div>
                    </div>
                    <!--<div class="alignright">
                        <div class="padding-right">
                            <a href="#" class="link-1">read more</a>
                        </div>
                    </div>-->
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->


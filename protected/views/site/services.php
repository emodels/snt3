<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#menu_Services a').addClass('current');"
    , CClientScript::POS_END    
);
?>
<!--==============================content================================-->
<section id="content" style="padding-bottom: 20px">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <h2 class="prev-indent-bot">Services</h2>
                    <section class="padding-top" style="width: 100%">
                        <p class="justify">SNT3 provides industry-focused services for public and private clients. Our experienced staff, combined with our global network, allows us to provide the support you need—wherever you need it, at home and abroad, whatever the size of your organization.</p>
                    </section>
                    <section id="service_image"><img src="images/service.jpg" /></section>
                    <section id="services_tabs" class="padding-top">
                        <h4>We provide:</h4>
                        <a href="talent-acquisition" class="tab_button">Talent Acquisition</a>
                        <a href="hosted-solutions" class="tab_button">Hosted Solutions</a>
                        <a href="offshore-service-offering" class="tab_button">Offshore Service Offerings</a>
                        <a href="mobile-application-development" class="tab_button">Mobile Application Development</a>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
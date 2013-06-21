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
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <h2 class="prev-indent-bot">Offshore Service Offering</h2>
                    <section class="padding-top1">
                        <p class="justify"><img src="images/offshore_service_offering.png" align="left" style="padding: 0 20px 0 0"/>SNT3 offshore setup consulting services provides OnSite, OffSite&OffShore IT Staffing, IT Recruiting and IT Placement Services for Sri Lankan Offshore setup solutions.</p>
                        <h5 class="indent-bot">Here is what we exactly do for offshore setup:</h5>
                        <ul class="list-1 spacing-bot">
                            <li><a href="#">Formation of Branch office or subsidiary in Sri Lanka.</a></li>
                            <li><a href="#">Finding a location in Sri Lanka for Operations.</a></li>
                            <li><a href="#">Negotiating terms of lease.</a></li>
                            <li><a href="#">Supply All Equipments (Computers, Furniture, Cubicles, ETC).</a></li>
                            <li><a href="#">Provide Temporary and permanent Man Power to the company.</a></li>
                            <li><a href="#">Facilitate the needs for car/hotel rental for any visitors to Sri Lanka.</a></li>
                            <li><a href="#">Provide commuter service provider (if needed for employees, in shift work).</a></li>
                            <li><a href="#">Call Center Setup and operations management.</a></li>
                        </ul>
                        <p class="justify">With our vast network of partners and vendors we can assist our clients in almost any business needs. If you have a specific solution or see something that is not listed here please contact us we will try our best to see if we can assist you or direct you to someone who will be able to assist you in your business needs.</p>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
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
<section id="content" style="padding-bottom: 25px">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <div class="row">
                        <div class="column"><h2 class="prev-indent-bot">Hosted Solutions</h2></div>
                        <div style="float: right; padding: 8px 138px 0 0">
                            <a href="offshore-service-offering" style="font-size: 18px; color: #666"><b>Offshore Service Offerings</b></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="talent-acquisition" style="font-size: 18px; color: #666"><b>Talent Acquisition</b></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <section class="padding-top1">
                        <p class="justify"><img src="images/hosted_solutions_1.png" align="left" style="padding: 0 20px 20px 0" />Every business has unique IT requirements, and that's why we provide a wide portfolio of hosted solutions. And since the best configuration for your business may span more than one platform, we can help you mix-and-match to create the optimal compute solution for your needs.</p>
                        <h5 class="indent-bot2">Referral Management System</h5>
                        <h5 class="indent-bot">Inventory control and Accounting software application</h5>
                        <p class="justify">Inventory control and Accounting software applications for small and medium scale retail or wholesale shops / Manufacturing Industries. This is web based software application developed in PHP/MySQL</p>
                        <div class="clear"></div>
                        <h5 class="indent-bot">Curriculum budget tracker software</h5>
                        <p class="justify">Curriculum budget tracker software application for large scale Organizations with multiple departments.  This will allow Top management to organize annual budgets through out the organization.   This is Web based application coded in ASP.NET / SQL Server</p>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
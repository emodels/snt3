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
                    <h2 class="prev-indent-bot">Services</h2>
                    <section class="padding-top1">
                        to be done
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
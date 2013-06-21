<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#menu_it_outsourcing a').addClass('current');"
    , CClientScript::POS_END    
);
?>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <h2>IT Outsourcing</h2>
                    <section class="padding-top1">
                        <p class="justify">We focus on highly qualitative, timely delivered and cost-effective offshore software development. With a rich and varied experience in providing offshore software development and project management capabilities and stringent quality standards ensure us to develop solutions that give your business an edge over your competitors. Our global software outsourcing model makes sure we deliver maximum targeted result to YOU.</p>
                        <img src="images/it_outsource_concept.png"/>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
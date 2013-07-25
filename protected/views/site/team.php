<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#team a').addClass('current');"
    , CClientScript::POS_END    
);
?>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <div class="row">
                        <div class="column"><h2 class="prev-indent-bot" style="padding-bottom: 20px">Leadership Team</h2></div>
                        <div style="float: right; padding-top: 8px">
                            <a href="about-us" style="font-size: 18px; color: #666"><b>About Us</b></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row" style="padding: 20px; background-color: #00A1DE; color: black"><b>Navin De Silva – Managing Partner</b></div>
                    <div class="row" style="padding: 10px; border: solid 1px #00A1DE">
                        <div class="column" style="width: 770px; padding-top: 10px">
                            <p style="text-align: justify">NavinDe Silva is a Managing Partner of SNT3 Consulting and has over twelve years of experience in consulting and project management. He holds a Degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK. </p>
                            <p style="text-align: justify">Coming from a project management background, he was a senior manager in the global IT services/consulting industry with a proven track record of achievements in leading and managing software development, projects in Australia, USA & Europe for Fortune 500 clients.</p>
                        </div>
                        <div style="float: right;"><img src="images/navin.png" style="width: 126px; height: 130px"/></div>
                        <div class="clear"></div>
                    </div>
                    <!----------------------------------------------------------------------->
                    <div class="row" style="padding: 20px; background-color: #00A1DE; color: black"><b>Sanjika Abeyratna - Managing Partner</b></div>
                    <div class="row" style="padding: 10px; border: solid 1px #00A1DE">
                        <div class="column" style="width: 770px; padding-top: 10px">
                            <p style="text-align: justify">Sanjika is is a Managing Partner of SNT3 Consulting and has over twelve years of experience in consulting. He Holds a degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK and MSc in Information Management from Monash University, Australia.</p>
                            <p style="text-align: justify">Coming from an Information Technology and project delivery background, he has successfully managed large scale, complex IT integration projects in Australia, Sri Lanka and New Zealand. He was responsible for setting up offshore operations in Sri Lanka and he has also worked as a country manager for Sri Lanka representing an Australian IT Security Company.</p>
                        </div>
                        <div style="float: right;"><img src="images/sanjika.png" style="width: 126px; height: 130px"/></div>
                        <div class="clear"></div>
                    </div>
                    <!----------------------------------------------------------------------->
                    <div class="row" style="padding: 20px; background-color: #00A1DE; color: black"><b>Theekshana Somaratna - Managing Partner</b></div>
                    <div class="row" style="padding: 10px; border: solid 1px #00A1DE">
                        <div class="column" style="width: 770px; padding-top: 10px">
                            <p style="text-align: justify">Theekshanais a Managing Partner of SNT3 Consulting and has over twelve years of experience in data management space. He Holds a degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK and MSc in Information Management from Monash University, Australia.</p>
                            <p style="text-align: justify">Coming from an Information Technology background, his experience encompasses all domains of information management with specialist skills in data warehousing, data migration, data architecture, business intelligence & analytical reporting. He has successfully delivered multi-million dollar projects to High profile companies in Australia.</p>
                        </div>
                        <div style="float: right;"><img src="images/theekshana.png" style="width: 126px; height: 130px"/></div>
                        <div class="clear"></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
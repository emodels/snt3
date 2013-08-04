<?php 
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#about_us a').addClass('current');"
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
                        <div id="services_tabs" class="column" style="float: right">
                            <a href="about-us" class="tab_button">About Us</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row" style="width: 97%; padding: 10px; border-radius: 5px; border: solid 1px silver; box-shadow: 5px 5px 5px #A3ADBE;">
                        <p style="font-size: 18px; color: #0066cc"><b>Navin De Silva – Managing Partner</b></p>
                        <div class="column" style="padding-top: 10px">
                            <img src="images/navin.png" align="left" style="padding: 0 20px 20px 0; width: 126px; height: 130px"/>
                            <p class="justify">Navin De Silva is a Managing Partner of SNT3 Consulting and has over twelve years of experience in consulting and project management. He holds a Degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK.</p>
                            <p class="justify">Coming from a project management background, he was a senior manager in the global IT services/consulting industry with a proven track record of achievements in leading and managing software development, projects in Australia, USA & Europe for Fortune 500 clients.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear" style="padding-bottom: 20px"></div>
                    <!----------------------------------------------------------------------->
                    <div class="row" style="width: 97%; padding: 10px; border-radius: 5px; border: solid 1px silver; box-shadow: 5px 5px 5px #A3ADBE;">
                        <p style="font-size: 18px; color: #0066cc"><b>Sanjika Abeyratna - Managing Partner</b></p>
                        <div class="column" style="padding-top: 10px">
                            <img src="images/sanjika.png" align="left" style="padding: 0 20px 20px 0; width: 126px; height: 130px"/>
                            <p class="justify">Sanjika is is a Managing Partner of SNT3 Consulting and has over twelve years of experience in consulting. He Holds a degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK and MSc in Information Management from Monash University, Australia.</p>
                            <p class="justify">Coming from an Information Technology and project delivery background, he has successfully managed large scale, complex IT integration projects in Australia, Sri Lanka and New Zealand. He was responsible for setting up offshore operations in Sri Lanka and he has also worked as a country manager for Sri Lanka representing an Australian IT Security Company.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear" style="padding-bottom: 20px"></div>
                    <!----------------------------------------------------------------------->
                    <div class="row" style="width: 97%; padding: 10px; border-radius: 5px; border: solid 1px silver; box-shadow: 5px 5px 5px #A3ADBE;">
                        <p style="font-size: 18px; color: #0066cc"><b>Theekshana Somaratna - Managing Partner</b></p>
                        <div class="column" style="padding-top: 10px">
                            <img src="images/theekshana.png" align="left" style="padding: 0 20px 20px 0; width: 126px; height: 130px"/>
                            <p class="justify">Theekshana is a Managing Partner of SNT3 Consulting and has over twelve years of experience in data management space. He Holds a degree in BSc (Hons) Information Systems from Manchester Metropolitan University, UK and MSc in Information Management from Monash University, Australia.</p>
                            <p class="justify">Coming from an Information Technology background, his experience encompasses all domains of information management with specialist skills in data warehousing, data migration, data architecture, business intelligence & analytical reporting. He has successfully delivered multi-million dollar projects to High profile companies in Australia.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear" style="padding-bottom: 20px"></div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
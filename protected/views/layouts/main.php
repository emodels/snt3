<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto.css" type="text/css" media="screen"> 
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.4.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-replace.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/contact-form.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Lato_Black_900.font.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.faded.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/easyTooltip.js"></script>
    <script type="text/javascript">
              $(document).ready(function(){
                  $(".icon a.tooltips").easyTooltip();
              });
    </script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/hover-image.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('ul.sf-menu').superfish();
    });
    </script>  
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container" id="page">
    <header>
        <div class="top">
            <div class="main">
                <h1><a href="#">Hatha</a></h1>
                <form action="http://www.google.com/search" id="Search"><div class="indent"><div class="rowElem1"><input type="text" name="q" class="input" value="Searching ..." onBlur="if(this.value=='') this.value='Searching ...'" onFocus="if(this.value =='Searching ...' ) this.value=''"  /><a href="#" onClick="document.getElementById('Search').submit()" ><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/button1.gif" /></a></div><div style="display: none"><input type="checkbox" name="sitesearch" value="snt3.com" checked /></div></div></form>
                <div class="indent1">
                    <div class="addinto_sharebox addinto_sharebox_default">
                    <a class="addinto_button_email"></a>
                    <a class="addinto_button_print"></a>
                    <a class="addinto_button_bookmark"></a>
                    <a class="addinto_button_facebook"></a>
                    <a class="addinto_button_twitter"></a>
                    <a class="addinto_button_google_plus"></a>
                    <a class="addinto_button_separator"></a>
                    <a href="http://www.addinto.com/ai?type=bkmk" class="addinto_button_more_dd"></a>
                    </div>
                    <script type="text/javascript" src="http://static.addinto.com/ai/ai2_bkmk.js"></script>
                </div>
                <div class="inside">
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="#" style="width: 80px">Home</a></li>
                            <li><a href="#">IT Outsourcing</a></li>
                            <li><a href="#">Talent Acquisition</a>
                                    <ul>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">Marketing</a>
                                            <ul>
                                            <li><a href="#">PR</a></li>
                                            <li><a href="#">Advertising</a></li>
                                            <li><a href="#">Brand Policy</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Management</a></li>
                                    <li><a href="#">Strategic planning</a></li>
                                    <li><a href="#">Web services</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Hosted Solutions</a></li>
                            <li><a href="#">Offshore Service offerings</a></li>
                            <li><a href="#" style="width: 70px">About us</a></li>
                            <li><a href="#" style="width: 70px">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php echo $content; ?>
    <div class="clear"></div>
    <footer>      
        <div class="main">
            <div class="container_24">
                            <div class="inside">
                                    <div class="container">
                                            <div class="grid_7 alpha">
                                                    <div class="container"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/title.gif" class="fleft" /></div>
                                                    <!--{%FOOTER_LINK}-->
                                            </div>
                                            <div class="grid_3">
                                                    <h2>Why Us</h2>
                                                    <ul>
                                                            <li><a href="#">Our Clients</a></li>
                                                            <li><a href="#">Technology</a></li>
                                                            <li><a href="#">IT Outsourcing</a></li>
                                                    </ul>
                                            </div>
                                            <div class="grid_4">
                                                    <h2>Quick Links</h2>
                                                    <ul>
                                                            <li><a href="#">Talent Acquisition</a></li>
                                                            <li><a href="#">Hosted Solutions</a></li>
                                                            <li><a href="#">Offshore Services</a></li>
                                                    </ul>
                                            </div>
                                            <div class="grid_5">
                                                    <h2>Support</h2>
                                                    <ul>
                                                            <li><a href="#">Contact us</a></li>
                                                            <li><a href="#">Help Desk</a></li>
                                                            <li><a href="#">About us</a></li>
                                                    </ul>
                                            </div>
                                            <div class="grid_5 omega">
                                                    <h2>Newsletter:</h2>
                                                    <form action="" id="Search1"><div class="container">
                                                            <div class="rowElem2"><input type="text" class="input1" value="Enter your email here" onBlur="if(this.value=='') this.value='Enter your email here'" onFocus="if(this.value =='Enter your email here' ) this.value=''"  /></div>
                                                            <a href="#" onClick="document.getElementById('Search1').submit()" class="button">subscribe</a>
                                                    </div></form>
                                            </div>
                                    </div>        
                            </div>
                    </div>
        </div>   
    </footer>   
</div><!-- page -->
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.min.js" type="text/javascript"></script>
    <script src="js/ff_cash.js" type="text/javascript"></script>
    <script src="js/superfish.js" type="text/javascript"></script>
    <script src="js/tms-0.3.2.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/easyTooltip.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script> 
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Lato_Black_900.font.js" type="text/javascript"></script>
    <script src="js/Lato_700.font.js" type="text/javascript"></script>   
	<!--[if lt IE 7]> 
  <div style='clear:both; text-align:center; position:relative;'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img                       src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a  faster, safer browsing experience, upgrade for free today." /></a></div>
 <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<header class="header">
    <div class="row-1">
    	<div class="main">
       	  <h1><a class="logo" href="index.php">SNT3</a></h1>
            <ul class="list-services">
            	<li><a class="tooltip" title="Linkedin" href="#"><img src="images/pict-1.png" width="24" height="24" alt=""></a></li>
                <li><a class="tooltip" title="Facebook" href="#"><img src="images/pict-2.png" width="24" height="24" alt=""></a></li>
                <li><a class="tooltip" title="Twitter" href="#"><img src="images/pict-3.png" width="24" height="24" alt=""></a></li>
                <li><a class="tooltip" title="Technorati" href="#"><img src="images/pict-4.png" width="24" height="24" alt=""></a></li>
            </ul>
            <nav>
                <ul class="sf-menu">
                    <li><a class="current" href="index.php"><strong><strong>Home</strong></strong></a></li>
                    <li><a href="it-outsourcing"><strong><strong>IT Outsourcing</strong></strong></a></li>
                    <li><a href="#"><strong><strong>Services</strong></strong></a>
                    	<ul>
                            <li><a href="talent-acquisition"><strong><strong>Talent Acquisition</strong></strong></a></li>
                            <li><a href="hosted-solutions"><strong><strong>Hosted Solutions</strong></strong></a></li>
                            <li><a href="offshore-service-offering"><strong><strong>Offshore Service Offerings</strong></strong></a></li>
                        </ul>
                    </li>
                    <li><a href="about-us"><strong><strong>about us</strong></strong></a></li>
                    <li><a href="contact"><strong><strong>contacts</strong></strong></a></li>	
                </ul>
          </nav>
        </div>
    </div>
</header>
<!--==============================End header=================================-->
    <?php echo $content; ?>
<!--==============================footer=================================-->
<footer>
	<div class="main">
        <div class="wrapper">
            <div class="text-bot">
                <div class="wrapper">
                    <a href="#" class="logo-bot">Guide</a>
                    <div class="extra-wrap">
                        <div class="padding-top1">&copy; 2011</div>
                    </div>
                </div>
                <a href="#" class="privacy">Privacy Policy</a>
            </div>
            <div class="address">
            	Level 2, 710 Collins Street<br>Docklands VIC 3008,<br>Australia.
            </div>
            <div class="contacts">
            	E -mail: <a href="mailto:info@snt3.com" class="link color-3">info@snt3.com</a><br>Phone: +61431 108 137<br>Fax: +61 3 9097 1766
            </div>
            <div class="footer-link">
                <a href="#" alt="" class="tooltip" title="LinkedIn"><img src="images/linkedin.png" alt="" style="width: 50px; height: 50px;" /></a>
                <a href="#" alt="" class="tooltip" title="Facebook"><img src="images/facebook.png" alt="" style="width: 50px; height: 50px;" /></a>
                <a href="#" alt="" class="tooltip" title="Twitter"><img src="images/twitter.png" alt="" style="width: 50px; height: 50px;" /></a>
                <a href="#" alt="" class="tooltip" title="Technorati"><img src="images/techno.png" alt="" style="width: 50px; height: 50px;" /></a>
            </div>
        </div>
    </div>
</footer>
<!--==============================End footer=================================-->
</body>
</html>

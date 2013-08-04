<?php 
Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/css/form.css');
Yii::app()->clientScript->registerScript("menu_highlight",
   "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#menu_Services a').addClass('current');"
    , CClientScript::POS_END    
);
?>
<style type="text/css">
div.form input[type='text'] { width: 170px; }    
#Enquiry_best_time_to_call input, #Enquiry_nature_of_message input
{
    float:left;
}    
#Enquiry_best_time_to_call label, #Enquiry_nature_of_message label
{
    width: 70px;
    margin: 5px 0 15px 5px;
    float: left;
}
</style>
<!--==============================content================================-->
<section id="content">
    <div class="padding-content">
        <div class="main">
            <div class="wrapper">
                <article>
                    <div class="row">
                        <div class="column"><h2 class="prev-indent-bot">Mobile Application Development</h2></div>
                        <div style="float: right; padding: 8px 0 0 0">
                            <a href="talent-acquisition" style="font-size: 15px; color: #666"><b>Talent Acquisition</b></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="offshore-service-offering" style="font-size: 15px; color: #666"><b>Offshore Service Offering</b></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                            <a href="hosted-solutions" style="font-size: 15px; color: #666"><b>Hosted Solutions</b></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <section class="padding-top1">
                        <p class="justify"><img src="images/mobile_app_dev.png" align="left" style="padding: 0 30px 10px 0"/>At SNT3, we are delighted to offer high quality mobile application development services to Australian market at a very affordable cost with the help of our Sri Lankan and Indian offshore development centers.</p>
                        <p class="justify">We are specialized in mobile application development in real estate industry with the knowledge of our parent company, Dwellings Property Group.</p>
                        <p class="justify">SNT3 can help you by providing Mobile Application Development Service and the talent needed to develop these cross-platform mobile applications like Android applications, iOS applications, windows phone app, which will work regardless of the operating system it is based on. We can provide you not only with the brightest minds available but also dedicated Mobile Application Developers at the top of their field who will work with you to streamline your product development issues and work at creating a generic mobile application which will serve the needs of many users regardless of their platform. When you engage with us- we ensure that your product development cycle is minimized while your efficiency and effectiveness rates go beyond the roof. Our professionals who are brimming with talent, experience and expertise can definitely go a long way in delivering to the highest levels of quality in Android, iOS and Windows Phone Application Development.</p>
                        <p class="justify">SNT3 Mobile Application Developers available based on your technical requirements, timeline, budget and quantum of deliverables for Mobile apps Development. We can promise you efficient and streamlined Android Application development, iPhone Application Development and Widows phone Application Development at a reasonable and market competitive cost. The future of cross-platform application development has arrived and it is only a matter of time before the pioneers in this field go on to become big names in the field of technology. When you hire our best talent- we will make sure you are on the cutting edge of mobile technology to gain competitive edge of your field of business.</p>
                        <div class="column" style="width: 340px">
                            <h5 class="indent-bot">Our Services:</h5>
                            <ul class="list-1 spacing-bot">
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Mobile Application Development</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Android Application Development</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Application Migration</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Application Redesign</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">iPad Application Development</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">iPhone Application Development</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Mobile Application Marketing</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Mobile UI Design</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Quality Assurance</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Web Development</a></li>
                                <li><a href="#" style="cursor: default" onclick="js:return false;">Windows Mobile Application Development</a></li>
                            </ul>
                        </div>
                        <div class="column">
                            <div class="form">
                                <?php
                                $form = $this->beginWidget('CActiveForm', array(
                                    'id' => 'enquiry-form',
                                    'htmlOptions' => array('autocomplete' => 'true'),
                                    'enableClientValidation' => true,
                                    'clientOptions' => array(
                                        'validateOnSubmit' => true,
                                        'validateOnChange' => true
                                    ),
                                ));
                                ?>  
                                <div class="column" style="width: 387px">
                                    <h4 style="padding-bottom: 20px">Online Enquiry</h4>
                                    <div class="wrapper" style="background-color: #f7f7f7; border: solid 1px silver; border-radius: 5px; padding: 5px 0 18px 10px; box-shadow: 5px 5px 5px #888888;">
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">First Name</div>
                                            <div class="column"><?php echo $form->textField($model, 'first_name'); ?><?php echo $form->error($model, 'first_name'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Last Name</div>
                                            <div class="column"><?php echo $form->textField($model, 'last_name'); ?><?php echo $form->error($model, 'last_name'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Job Title</div>
                                            <div class="column"><?php echo $form->textField($model, 'job_title'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Company Name</div>
                                            <div class="column"><?php echo $form->textField($model, 'company'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 30px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Best Time to Call</div>
                                            <div class="column"><?php echo $form->radioButtonList($model, 'best_time_to_call', array('Morning' => 'Morning', 'Afternoon' => 'Afternoon'), array('separator'=>'')); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Phone Number</div>
                                            <div class="column"><?php echo $form->textField($model, 'phone'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Mobile Number</div>
                                            <div class="column"><?php echo $form->textField($model, 'mobile'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Email Address</div>
                                            <div class="column"><?php echo $form->textField($model, 'email'); ?><?php echo $form->error($model, 'email'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 40px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Nature of your message:</div>
                                            <div class="column"><?php echo $form->radioButtonList($model, 'nature_of_message', array('Consulting Services' => 'Consulting Services', 'Delivery Services' => 'Delivery Services'), array('separator'=>'')); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Subject</div>
                                            <div class="column"><?php echo $form->textField($model, 'subject'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row" style="padding-top: 20px">
                                            <div class="column" style="width: 150px; padding-left: 16px">Message</div>
                                            <div class="column"><?php echo $form->textArea($model, 'message', array('style' => 'width:168px; height: 60px')); ?><?php echo $form->error($model, 'message'); ?></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row">
                                            <div class="column" style="width: 150px; padding-left: 16px">&nbsp;</div>
                                            <div class="column"><?php echo CHtml::submitButton('Submit Information', array('class' => 'button')); ?></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix" style="padding-bottom: 20px"></div>
                                </div>
                                <?php $this->endWidget(); ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
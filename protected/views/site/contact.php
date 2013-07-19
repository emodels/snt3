<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/css/form.css');
Yii::app()->clientScript->registerScript("menu_highlight", "$('.sf-menu li a').each(function(){
       $(this).removeClass('current');
    });
    $('#contact a').addClass('current');"
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
                    <h2 class="prev-indent-bot">Contact Us</h2>
                    <section class="padding-top1">
                        <img src="images/contact_us.png" align="left" style="margin: 0 50px 20px 0; border-radius: 10px;  box-shadow: 5px 5px 5px #888888;" />
                        <h4>SNT3 Consulting Head office (Australia - Melbourne)</h4>
                        <p>
                        <div class="fleft" style="width: 100px">Address: </div><div>Level 2, 710 Collins Street, Docklands VIC 3008, AUSTRALIA.</div>
                        <div class="fleft" style="width: 100px">Mobile: </div><div>+61431 108 137 or +61425 732 711 or +61431 150 003</div>
                        <div class="fleft" style="width: 100px">Office Phone: </div><div>+61 3 9097 1766</div>
                        <div class="fleft" style="width: 100px">Email: </div><div><a href="mailto:info@snt3.com">info@snt3.com</a></div>
                        </p>
                    </section>
                    <section class="padding-top">
                        <h4>Colombo - Sri Lanka</h4>
                        <p>
                        <div class="fleft" style="width: 100px">Address: </div><div>60/2, Barnes Place, Colombo 7, Sri Lanka.</div>
                        <div class="fleft" style="width: 100px">Phone: </div><div>+94 773 740 742</div>
                        <div class="fleft" style="width: 100px">Email: </div><div><a href="mailto:info@snt3.com">info@snt3.com</a></div>
                        </p>
                    </section>
                </article>
            </div>
            <div class="wrapper" style="padding-top: 20px">
                <section>
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
                            <h4 style="padding-bottom: 20px">Contact Form</h4>
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
                    <div class="column" style="padding-left: 45px">
                        <h4 style="padding-bottom: 20px">Our Location</h4>
                        <a href="http://goo.gl/maps/8RKaQ" target="_blank"><img src="images/maps.jpg" style="border: solid 1px silver; border-radius: 5px; box-shadow: 5px 5px 5px #888888;"/></a>
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>    
        </div>
    </div>
</section>
<!--==============================End content================================-->
<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/css/form.css');
Yii::app()->clientScript->registerScript("menu_highlight", "$('.sf-menu li a').each(function(){
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
                    <h2 class="prev-indent-bot">Global Talent Acquisition</h2>
                    <section class="padding-top1">
                        <p><img src="images/talent_acqua_1.jpg" align="left" style="padding: 0 20px 20px 0"/>When there is insufficient talent available locally, it is necessary to go off-shore. The importance of human resource planning to the success of any business enterprise is well recognized. Equally accepted is the fact that certain skills do not exist in sufficient numbers today and can be hard to find. The need to recruit offshore is immediately apparent.</p>
                        <p class="justify">This can bring its own complications, and Clients must employ a robust and thorough process not only to hire the best from around the world, but also to retain them.</p>
                        <p class="justify">
                            Hiring or staffing offshore may be needed for a variety of reasons.
                            You may need a very specific skill where you are, but it not available in your country. So you search internationally and want the successful candidate to come and work with you.
                            You may need a skill set for a job in your overseas plant but you are unsure how to recruit top talent locally with confidence.
                            You may need a more specific skill set that is not available in a third-world market, but is generally available in a developed market.
                            Each situation has its own best solution.
                        </p>
                        <p class="justify">We are experienced in recruiting for overseas postings. We are also experienced in recruiting overseas for domestic postings.
                            Through our global contacts we can give you high quality local services in most locations.
                            Don’t forget, an advantage with offshore recruiting is that people who are willing to immigrate are typically highly motivated, upwardly mobile, and loyal employees.
                        </p>
                    </section>
                </article>
                <article class="padding-top">
                    <h4>Job Seekers - Uplaod your CV</h4>
                    <section class="padding-top1">
                        <div class="form">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'employee-form',
                                'htmlOptions' => array('autocomplete' => 'true', 'enctype' => 'multipart/form-data'),
                                'enableClientValidation' => true,
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                    'validateOnChange' => true
                                ),
                            ));
                            ?>  
                            <div clas="row" style="background: #f7f7f7; padding: 10px 10px 10px 30px; border: solid 1px #e6e6e6; border-radius: 5px;">
                                <!--Input Panel -->
                                <div class="column" style="width:408px; color:#135B84;">
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Email', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($model, 'email'); ?><?php echo $form->error($model, 'email'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('First Name', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($model, 'first_name'); ?><?php echo $form->error($model, 'first_name'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Last Name', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($model, 'last_name'); ?><?php echo $form->error($model, 'last_name'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Mobile', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($model, 'mobile'); ?><?php echo $form->error($model, 'mobile'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Desired State of work', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($model, 'desired_state', array('NSW' => 'New South Wales', 'QLD' => 'Queensland', 'SA'=> 'South Australia', 'TAS' => 'Tasmania', 'VIC' => 'Victoria', 'WA' =>'Western Australia', 'NA' =>'Northern Territory', 'ACT' => 'Australian Capital Territory'), array('empty' => 'Select...')) ?><?php echo $form->error($model, 'desired_state'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Status', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($model, 'status', array('Australian Citizen' => 'Australian Citizen', 'Australian Permanent Resident' => 'Australian Permanent Resident', 'NZ Citizen'=> 'NZ Citizen', 'International Applicant' => 'International Applicant', 'International Applicant with Work Visa' => 'International Applicant with Work Visa'), array('empty' => 'Select...')) ?><?php echo $form->error($model, 'status'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Expertise Category', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($model, 'expertise_category', 
                                                array(
                                                    'Accountancy & Finance' => 'Accountancy & Finance', 
                                                    'Architecture' => 'Architecture',
                                                    'Banking' => 'Banking',
                                                    'Construction' => 'Construction',
                                                    'Contact Centres' => 'Contact Centres',
                                                    'Education' => 'Education',
                                                    'Energy' => 'Energy',
                                                    'Engineering' => 'Engineering',
                                                    'Executive' => 'Executive',
                                                    'Facilities Management' => 'Facilities Management',
                                                    'Healthcare' => 'Healthcare',
                                                    'HR' => 'HR',
                                                    'Insurance' => 'Insurance',
                                                    'IT' => 'IT',
                                                    'Legal' => 'Legal',
                                                    'Life Sciences' => 'Life Sciences',
                                                    'Logistics' => 'Logistics',
                                                    'Manufacturing & Operations' => 'Manufacturing & Operations',
                                                    'Office Support' => 'Office Support',
                                                    'Oil & Gas' => 'Oil & Gas',
                                                    'Policy & Strategy' => 'Policy & Strategy',
                                                    'Procurement' => 'Procurement',
                                                    'Property' => 'Property',
                                                    'Resources & Mining' => 'Resources & Mining',
                                                    'Retail' => 'Retail',
                                                    'Sales & Marketing' => 'Sales & Marketing',
                                                    'Trades & Labour' => 'Trades & Labour'
                                                ), 
                                                array('empty' => 'Select...')) ?>
                                                    <?php echo $form->error($model, 'expertise_category'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Upload CV', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->fileField($model,'cv') ?><?php echo $form->error($model, 'cv'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px">&nbsp;</div>
                                        <div class="column"><?php echo CHtml::submitButton('Submit Information', array('class' => 'button')); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <!--Input Panel End-->
                            </div>
                            <?php $this->endWidget(); ?>
                        </div>
                    </section>
                </article>
                <article class="padding-top1">
                    <h4>Employers - Submit your Vacancy</h4>
                    <section class="padding-top1">
                        <div class="form">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'employer-form',
                                'htmlOptions' => array('autocomplete' => 'true', 'enctype' => 'multipart/form-data'),
                                'enableClientValidation' => true,
                                'clientOptions' => array(
                                    'validateOnSubmit' => true,
                                    'validateOnChange' => true
                                ),
                            ));
                            ?>  
                            <div clas="row" style="background: #f7f7f7; padding: 10px 10px 10px 30px; border: solid 1px #e6e6e6; border-radius: 5px;">
                                <!--Input Panel -->
                                <div class="column" style="width:408px; color:#135B84;">
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Organisation', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'organisation'); ?><?php echo $form->error($employer, 'organisation'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Name', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'name'); ?><?php echo $form->error($employer, 'name'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Your job title', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'job_title'); ?><?php echo $form->error($employer, 'job_title'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Telephone', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'telephone'); ?><?php echo $form->error($employer, 'telephone'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Email', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'email'); ?><?php echo $form->error($employer, 'email'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Position recruiting', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'position_recruiting'); ?><?php echo $form->error($employer, 'position_recruiting'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Salary range?', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'salary_range'); ?><?php echo $form->error($employer, 'salary_range'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 100px"><?php echo CHtml::label('Vacancy location', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textField($employer, 'location_vacancy_based'); ?><?php echo $form->error($employer, 'location_vacancy_based'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('State', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($employer, 'state', array('NSW' => 'New South Wales', 'QLD' => 'Queensland', 'SA'=> 'South Australia', 'TAS' => 'Tasmania', 'VIC' => 'Victoria', 'WA' =>'Western Australia', 'NA' =>'Northern Territory', 'ACT' => 'Australian Capital Territory'), array('empty' => 'Select...')) ?><?php echo $form->error($employer, 'state'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Type of employment', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($employer, 'type_employment', array('Contract' => 'Contract', 'Permanent' => 'Permanent', 'Temporary'=> 'Temporary'), array('empty' => 'Select...')) ?><?php echo $form->error($employer, 'type_employment'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Expertise Category', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->dropdownList($employer, 'expertise_category', 
                                                array(
                                                    'Accountancy & Finance' => 'Accountancy & Finance', 
                                                    'Architecture' => 'Architecture',
                                                    'Banking' => 'Banking',
                                                    'Construction' => 'Construction',
                                                    'Contact Centres' => 'Contact Centres',
                                                    'Education' => 'Education',
                                                    'Energy' => 'Energy',
                                                    'Engineering' => 'Engineering',
                                                    'Executive' => 'Executive',
                                                    'Facilities Management' => 'Facilities Management',
                                                    'Healthcare' => 'Healthcare',
                                                    'HR' => 'HR',
                                                    'Insurance' => 'Insurance',
                                                    'IT' => 'IT',
                                                    'Legal' => 'Legal',
                                                    'Life Sciences' => 'Life Sciences',
                                                    'Logistics' => 'Logistics',
                                                    'Manufacturing & Operations' => 'Manufacturing & Operations',
                                                    'Office Support' => 'Office Support',
                                                    'Oil & Gas' => 'Oil & Gas',
                                                    'Policy & Strategy' => 'Policy & Strategy',
                                                    'Procurement' => 'Procurement',
                                                    'Property' => 'Property',
                                                    'Resources & Mining' => 'Resources & Mining',
                                                    'Retail' => 'Retail',
                                                    'Sales & Marketing' => 'Sales & Marketing',
                                                    'Trades & Labour' => 'Trades & Labour'
                                                ), 
                                                array('empty' => 'Select...')) ?>
                                                    <?php echo $form->error($employer, 'expertise_category'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Attach job specification', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->fileField($employer,'job_specification') ?><?php echo $form->error($employer, 'job_specification'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px"><?php echo CHtml::label('Further Information', '') ?></div>
                                        <div class="column" style="padding-bottom: 10px"><?php echo $form->textArea($employer, 'further_information', array('maxlength' => 300, 'rows' => 6, 'cols' => 50)); ?><?php echo $form->error($employer, 'further_information'); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="row">
                                        <div class="column" style="width: 200px">&nbsp;</div>
                                        <div class="column"><?php echo CHtml::submitButton('Submit Information', array('class' => 'button')); ?></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <!--Input Panel End-->
                            </div>
                            <?php $this->endWidget(); ?>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>
<!--==============================End content================================-->
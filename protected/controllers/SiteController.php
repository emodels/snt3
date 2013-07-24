<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionItoutsourcing() {
        $this->render('it_outsourcing');
    }

    public function actionServices() {
        $this->render('services');
    }

    public function actionTalentAcquisition() {
        $model = new Employee();
        $employer = new Employer();

        if (isset($_POST['Employee'])) {

            $model->attributes = $_POST['Employee'];

            //--------Save uploaded file to folder space-----------------------
            $model->cv = CUploadedFile::getInstance($model, 'cv');
            $model->cv->saveAs(Yii::getPathOfAlias('webroot.uploads.cv') . DIRECTORY_SEPARATOR . $model->cv->name, true);
            $model->cv = $model->cv->name;
            //-----------------------------------------------------------------

            $message = $this->renderPartial('//email/template/employee', array('model'=>$model), true);

            if (isset($model) && isset($message) && $message != "") {
                $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
                $mailer->Host = Yii::app()->params['SMTP_Host'];
                $mailer->Port = Yii::app()->params['SMTP_Port'];
                if (Yii::app()->params['SMTPSecure'] == TRUE) {
                    $mailer->SMTPSecure = 'ssl';
                }
                $mailer->IsSMTP();
                $mailer->SMTPAuth = true;
                $mailer->Username = Yii::app()->params['SMTP_Username'];
                $mailer->Password = Yii::app()->params['SMTP_password'];
                $mailer->From = Yii::app()->params['SMTP_Username'];
                $mailer->AddReplyTo(Yii::app()->params['SMTP_Username']);
                $mailer->AddAddress(Yii::app()->params['adminEmail']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_1']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_2']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_3']);
                $mailer->FromName = 'SNT3';
                $mailer->CharSet = 'UTF-8';
                $mailer->Subject = 'Employee CV Uploaded';
                $mailer->IsHTML();
                $mailer->Body = $message;
                $mailer->AddAttachment(Yii::getPathOfAlias('webroot.uploads.cv') . '/' . $model->cv);
                $mailer->SMTPDebug = Yii::app()->params['SMTPDebug'];

                try {
                    $mailer->Send();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            }

            Yii::app()->user->setFlash('success', 'Your Information Submitted');
            $this->redirect(array('/talent-acquisition'));
        }

        /**
         ******************( Employer Section )**************************************
         */
        if (isset($_POST['Employer'])) {

            $employer->attributes = $_POST['Employer'];

            if ($employer->further_information == "") {
                $employer->further_information = "n/a";
            }
            
            //--------Save uploaded file to folder space-----------------------
            $employer->job_specification = CUploadedFile::getInstance($employer, 'job_specification');
            
            if (isset($employer->job_specification)) {
                $employer->job_specification->saveAs(Yii::getPathOfAlias('webroot.uploads.job_specification') . DIRECTORY_SEPARATOR . $employer->job_specification->name, true);
                $employer->job_specification = $employer->job_specification->name;
            }
            //-----------------------------------------------------------------

            $message = $this->renderPartial('//email/template/employer', array('model'=>$employer), true);

            if (isset($employer) && isset($message) && $message != "") {
                $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
                $mailer->Host = Yii::app()->params['SMTP_Host'];
                $mailer->Port = Yii::app()->params['SMTP_Port'];
                if (Yii::app()->params['SMTPSecure'] == TRUE) {
                    $mailer->SMTPSecure = 'ssl';
                }
                $mailer->IsSMTP();
                $mailer->SMTPAuth = true;
                $mailer->Username = Yii::app()->params['SMTP_Username'];
                $mailer->Password = Yii::app()->params['SMTP_password'];
                $mailer->From = Yii::app()->params['SMTP_Username'];
                $mailer->AddReplyTo(Yii::app()->params['SMTP_Username']);
                $mailer->AddAddress(Yii::app()->params['adminEmail']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_1']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_2']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_3']);
                $mailer->FromName = 'SNT3';
                $mailer->CharSet = 'UTF-8';
                $mailer->Subject = 'Employer - submit vacancy';
                $mailer->IsHTML();
                $mailer->Body = $message;
                if ($employer->job_specification != "") {
                    $mailer->AddAttachment(Yii::getPathOfAlias('webroot.uploads.job_specification') . '/' . $employer->job_specification);
                }
                $mailer->SMTPDebug = Yii::app()->params['SMTPDebug'];

                try {
                    $mailer->Send();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            }

            Yii::app()->user->setFlash('success', 'Your Information Submitted');
            $this->redirect(array('/talent-acquisition'));
        }
        
        $this->render('talent_acquisition', array('model' => $model, 'employer'=> $employer));
    }

    public function actionHostedSolutions() {
        $this->render('hosted_solutions');
    }

    public function actionOffshoreServiceOffering() {
        $this->render('offshore_service_offering');
    }

    public function actionAbout() {
        $this->render('about');
    }

    public function actionTeam() {
        $this->render('team');
    }
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new Enquiry();
        
        if (isset($_POST['Enquiry'])) {

            $model->attributes = $_POST['Enquiry'];

            $message = $this->renderPartial('//email/template/enquiry', array('model'=>$model), true);

            if (isset($model) && isset($message) && $message != "") {
                $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
                $mailer->Host = Yii::app()->params['SMTP_Host'];
                $mailer->Port = Yii::app()->params['SMTP_Port'];
                if (Yii::app()->params['SMTPSecure'] == TRUE) {
                    $mailer->SMTPSecure = 'ssl';
                }
                $mailer->IsSMTP();
                $mailer->SMTPAuth = true;
                $mailer->Username = Yii::app()->params['SMTP_Username'];
                $mailer->Password = Yii::app()->params['SMTP_password'];
                $mailer->From = Yii::app()->params['SMTP_Username'];
                $mailer->AddReplyTo(Yii::app()->params['SMTP_Username']);
                $mailer->AddAddress(Yii::app()->params['adminEmail']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_1']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_2']);
                $mailer->AddAddress(Yii::app()->params['CCEmail_3']);
                $mailer->FromName = 'SNT3';
                $mailer->CharSet = 'UTF-8';
                $mailer->Subject = 'Online Enquiry';
                $mailer->IsHTML();
                $mailer->Body = $message;
                $mailer->SMTPDebug = Yii::app()->params['SMTPDebug'];

                try {
                    $mailer->Send();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            }

            $model = new Enquiry();
            Yii::app()->user->setFlash('success', 'Your Information Submitted');
        }

        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
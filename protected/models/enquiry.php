<?php

/**
 * Enquiry class.
 */
class Enquiry extends CFormModel
{
	public $first_name;
	public $last_name;
	public $job_title;
	public $company;
	public $best_time_to_call;
	public $phone;
	public $mobile;
	public $email;
	public $nature_of_message;
	public $subject;
	public $message;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('first_name, last_name, job_title, company, best_time_to_call, phone, mobile, email, nature_of_message, subject, message', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
                    'verifyCode'=>'Verification Code',
		);
	}
}
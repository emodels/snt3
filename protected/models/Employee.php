<?php

/**
 * Employee class.
 */
class Employee extends CFormModel
{
	public $first_name;
	public $last_name;
	public $email;
	public $mobile;
	public $desired_state;
	public $status;
	public $expertise_category;
	public $cv;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('first_name, last_name, email, mobile, desired_state, status, expertise_category, cv', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
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
                    
		);
	}
}
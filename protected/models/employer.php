<?php

/**
 * Employer class.
 */
class Employer extends CFormModel
{
	public $organisation;
	public $name;
        public $job_title;
        public $telephone;
        public $email;
        public $position_recruiting;
        public $salary_range;
        public $location_vacancy_based;
        public $state;
        public $type_employment;
        public $expertise_category;
        public $job_specification;
        public $further_information;

        /**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('organisation, name, job_title, telephone, email, position_recruiting, salary_range, location_vacancy_based, state, type_employment, expertise_category', 'required'),
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
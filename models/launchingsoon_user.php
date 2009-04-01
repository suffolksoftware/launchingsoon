<?php defined('SYSPATH') OR die('No direct access allowed.');

class Launchingsoon_User_Model extends ORM {

	public function validate(array & $array, $save = FALSE)
	{
		$array = Validation::factory($array)
			->pre_filter('trim')
			->add_rules('email',     'required', 'email')
			->add_callbacks('email', array($this, '_unique_email'))
        ;
		return parent::validate($array, $save);
	}

public function _unique_email(Validation $array, $field)
{
   // check the database for existing records
   $email_exists = (bool) ORM::factory('launchingsoon_user')->where('email', $array[$field])->count_all();
 
   if ($email_exists)
   {
       // add error to validation object
       $array->add_error($field, 'email_exists');
   }
 }

} // End Launching User Model
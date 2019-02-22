<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

	public function validationDefault(Validator $validator)
	{
		return $validator
		->notEmpty('family_name', 'A username is required')
		->notEmpty('first_name', 'A username is required')
		->notEmpty('phonetic_family_name', 'A password is required')
		->notEmpty('phonetic_first_name', 'A password is required')
		->notEmpty('nick_name', 'A password is required')
		->notEmpty('password', 'A password is required')
		->notEmpty('mail_address', 'A password is required')
		->notEmpty('sex', 'A password is required')
		->notEmpty('age', 'A password is required')
		->notEmpty('tell', 'A password is required')
		->notEmpty('job', 'A password is required')
		->notEmpty('create_time', 'A password is required')
		->notEmpty('update_time', 'A password is required')
		// ->notEmpty('role', 'A role is required')
		// ->add('role', 'inList', [
		//     'rule' => ['inList', ['admin', 'user']],
		//     'message' => 'Please enter a valid role'
		// ])
		;
	}

}
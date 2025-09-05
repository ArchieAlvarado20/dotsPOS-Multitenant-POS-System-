<?php

namespace Auth;

use \Core\Database;

/**
 * User class
 */
class User extends Database
{
	protected $allowedInsertColumns = [
		'name',
		'email',
		'gender',
		'password',
		'dob',
		'date_created',
	];

	protected $allowedUpdateColumns = [
		'name',
		'email',
		'email_verify',
		'image',
		'gender',
		'password',
		'dob',
		'channel_id',
		'deleted',
		'country_id',
		'date_updated',
		'date_deleted',
	];

	public function create(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}

		$data['date_created'] = date("Y-m-d H:i:s");
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

		return $this->insert('users',$data);
	}

	public function getByEmail(string $email)
	{
		return $this->fetch('select * from tblusers where email = :email limit 1',['email'=>$email]);
	}

	public function getById(int $id)
	{
		return $this->fetch('select * from tblusers where id = :id limit 1',['id'=>$id]);
	}

	public function updateById(array $data)
	{
		// code...
	}

	
	public function deleteById(array $data)
	{
		// code...
	}

	
}
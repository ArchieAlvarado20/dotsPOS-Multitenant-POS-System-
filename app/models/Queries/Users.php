<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Users extends Database
{
		protected $allowedInsertColumns = [
		 			'first_name',
                    'last_name',
                    'email',
                    'password',
                    'phone',
                    'role',
                    'gender',
					'verify_status',
                    'image',
					'address',
                    'created_at'
	];
	
		protected $allowedUpdateColumns = [
					'first_name',
                    'last_name',
                    'email',
                    'phone',
                    'role',
                    'gender',
					'verify_status',
                    'image',
					'address',
		];

	public function create(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}
		
		$data['created_at'] = date("Y-m-d H:i:s");
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

		return $this->insert('tblusers',$data);
	}
	
	public function getByEmail(string $email)
	{
		return $this->fetch('select * from tblusers where email = :email limit 1',['email'=>$email]);
	}

	public function getById(int $id)
	{
		return $this->fetch('select * from tblusers where id = :id limit 1',['id'=>$id]);
	}

	public function updateById(array $data,int $id)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedUpdateColumns))
				unset($data[$key]);
		}
		return $this->update('tblusers',$data,$id);	
	}
	
	public function deleteById(int $id)
	{
		return $this->fetch('update tblusers set deleted = 1,deleted_at = now() where id = :id limit 1',['id' => $id]);
	}

	public function getAll()
	{
		return $this->fetchAll("select * from tblusers where first_name != 'System' && deleted = 0");
	}
	
}

<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Suppliers extends Database
{
	protected $allowedInsertColumns = [
		 			'supplier',
                    'email',
                    'phone',
                    'contact_person',
                    'address',
                   
	];
	
		protected $allowedUpdateColumns = [
					'supplier',
                    'email',
                    'phone',
                    'contact_person',
                    'address',
		];

	public function create(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}

		return $this->insert('tblsupplier',$data);
	}
	
	public function getById(int $id){
		return $this->fetch("select * from tblsupplier where id = :id",['id'=> $id]);
	}
	public function getAll()
	{
		return $this->fetchAll("select * from tblsupplier where deleted = 0");
	}
		public function updateById(array $data,int $id)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedUpdateColumns))
				unset($data[$key]);
		}
		return $this->update('tblsupplier',$data,$id);	
	}
		public function deleteById(int $id)
	{
		return $this->fetch("update tblsupplier set deleted = 1,deleted_at = now() where id = :id limit 1",['id' => $id]);
	}
	
}
<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */


class Costs extends Database
{
	protected $allowedInsertColumns = [
						'pcode',
						'p_name',
						'category',
						'description',
						'price',
						'image',
						'created_at',
						'qty',
						'cost',
						're_order'
	];
	
		protected $allowedUpdateColumns = [
						'id',
						'pcode',
						'p_name',
						'category',
						'description',
						'price',
						'qty',
						're_order',
						'image',
						'user_id',
						'cost'
		];

	public function getById(int $id){
		return $this->fetch('select * from tblproduct where category = 1 && id = :id limit 1',['id'=>$id]);
	}
	public function updateById(array $data,int $id)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedUpdateColumns))
				unset($data[$key]);
		}
		return $this->update('tblproduct',$data,$id);	
	}
	public function getIndirect()
	{
		return $this->fetchAll("select * from tblproduct where category = '1' AND deleted = 0 order by id desc");
	}
    	public function getBilling()
	{
		return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where p.category = '1' order by s.id desc");
	}

	public function costsTotal($date){
		return $this->fetchAll("select sum(s.total)as total,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where r.stock_at = ? && p.category in(0,1)",[$date]);
	}

	public function costsTable(string $date){
		return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where r.stock_at = ? && p.category in(0,1) && p.p_name != 'test' order by s.id desc",[$date]);
	}

	public function costsTotalDirect(string $start,string $end)
	{
		 return $this->fetchAll("select sum(s.total)as total,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ?) &&  p.category = '0' order by s.id desc", [$start,$end]);
	}
	
	public function costsTableDirect(string $start,string $end)
	{
		 return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ? ) &&  p.category = '0' && p.p_name != 'test' order by s.id desc", [$start,$end]);
	}

	
	public function costsTotalIndirect(string $start,string $end)
	{
		 return $this->fetchAll("select sum(s.total)as total,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ?) &&  p.category = '1' order by s.id desc", [$start,$end]);
	}


	public function costsTableIndirect(string $start,string $end)
	{
		 return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ? ) &&  p.category = '1' && p.p_name != 'test' order by s.id desc", [$start,$end]);
	}

	public function costsTotalOnly(string $start,string $end)
	{
		 return $this->fetchAll("select sum(s.total)as total,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ?) && p.category in(0,1) order by s.id desc", [$start,$end]);
	}

	public function costsTableOnly(string $start,string $end)
	{
		 return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where (r.stock_at between ? and ?) && p.category in(0,1) && p.p_name != 'test' order by s.id desc", [$start,$end]);
	}

}
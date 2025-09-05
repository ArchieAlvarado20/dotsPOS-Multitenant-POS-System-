<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Stocks extends Database
{

	public function getInventory()
	{
		return $this->fetchAll("select * from tblproduct where category = 0 order by view desc");
	}

	public function getRaw()
	{
		return $this->fetchAll("select * from tblproduct where category = 0 && deleted = 0");
	}

		public function getStocks()
	{
		return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where p.category = 0 && r.stock_by !='System' order by s.id desc");
	}
		public function getSub()
	{
		return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id  where p.category = 0 && s.status = 'Raw' order by s.id desc");
	}

		public function getReturn()
	{
		return $this->fetchAll("select s.*,r.*, p.* from tblstock s join tblreference r on s.ref_id = r.id join tblproduct p on s.p_id = p.id where s.status = 'Return' && p.category = 0 order by s.id desc");
	}
	
	public function getById(int $id){
		return $this->fetch('select * from tblproduct where category in(0,1) && id = :id limit 1',['id'=>$id]);
	}
}
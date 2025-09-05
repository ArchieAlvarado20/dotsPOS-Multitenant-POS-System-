<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Cancel extends Database
{
		protected $allowedInsertColumns = [
					't_id',
					'p_id',
					'void_by',
					'cancel_request',
					'c_qty',
					'reason',
					'date',
					'time'
		];
	
		protected $allowedUpdateColumns = [
						
		];

		public function insertCancel($data){
			foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}
			
		$data['date'] = date("Y-m-d");
		$data['time'] = date("H:i:s");;

		return $this->insert('tblcancel',$data);
		}

	public function transDetails(int $id){
        return $this->fetch("select s.id,s.transno,p.pcode,p.description,s.qty,s.p_id,s.price,s.total,s.sdate,s.stime,u.first_name,s.status from tblcart s join tblproduct p on s.p_id = p.id join tblusers u on u.id = s.user_id where s.id = ? AND s.status='Sold'",[$id]);
    }
		public function selectAdmin(){
        return $this->fetchAll("select * from tblusers where role = 'Admin' AND deleted = 0");
    }
		public function selectCashier(){
        return $this->fetchAll("select * from tblusers where role = 'Cashier' AND deleted = 0");
    }
		public function updateCancel(int $id){
			return $this->fetch(" update tblcart set status = 'Cancelled' where id = ?  limit 1",[$id]);
	}
		public function getCancelled()
	{
		return $this->fetchAll("select c.id,c.void_by,c.cancel_request,s.transno,s.qty,s.price,s.total,s.sdate,s.stime,s.status,p.description from tblcancel c join tblproduct p on p.id = c.p_id join tblcart s on s.id = c.t_id where s.status = 'Cancelled'");
	}
			public function getCancelDetails(int $id)
	{
		return $this->fetch("select c.*,s.transno,s.qty,s.price,s.total,s.sdate,s.stime,s.status,p.pcode,p.description from tblcancel c join tblcart s on s.id = c.t_id join tblproduct p on p.id = c.p_id where c.id = ?",[$id]);
	}
}
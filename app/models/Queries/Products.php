<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Products extends Database
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

	public function create(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}
		
		$data['created_at'] = date("Y-m-d H:i:s");

		return $this->insert('tblproduct',$data);
	}

	public function createRaw(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}
		
		$data['created_at'] = date("Y-m-d H:i:s");
		$data['category'] = 0;
		return $this->insert('tblproduct',$data);
	}
	public function createIndirect(array $data)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedInsertColumns))
				unset($data[$key]);
		}
		
		$data['created_at'] = date("Y-m-d H:i:s");
		$data['category'] = 1;
		return $this->insert('tblproduct',$data);
	}
		public function deleteById(int $id)
	{	
		return $this->fetch("update tblproduct set deleted = 1, deleted_at = now() where id = :id",['id' => $id]);
	}
	public function getAll()
	{
		return $this->fetchAll("select * from tblproduct where category in(11,22,33,44) && deleted = 0");
	}

	public function getById(int $id){
		return $this->fetch('select * from tblproduct where category in(11,22,33,44) && id = :id limit 1',['id'=>$id]);
	}
	public function updateById(array $data,int $id)
	{
		foreach ($data as $key => $value) {
			if(!in_array($key, $this->allowedUpdateColumns))
				unset($data[$key]);
		}
		return $this->update('tblproduct',$data,$id);	
	}
	public function get_all(){
		return $this->fetchAll("select * from tblproduct  where category in(11,22,33,44) order by id asc");
	}
	public function get_search(string $text, string $barcode){
		return $this->fetchAll("select * from tblproduct where category in(11,22,33,44) && description like ? || p_name = ? order by p_name asc",[$text,$barcode]);
	}
	public function insertSales($transno, $qty, $price, $total, $sdate, $stime, $user_id, $p_id, $status, $trans_count){
		return $this->fetchAll("insert into tblcart(transno,qty,price,total,sdate,stime,user_id,p_id,status,trans_count)values(?,?,?,?,?,?,?,?,?,?)",[$transno,$qty,$price,$total,$sdate,$stime,$user_id,$p_id,$status,$trans_count]);
	}

	function get_trans_count()
{
	
    $date = date('Y-m-d');
    $num = 1;
	return $this->fetch("select trans_count from tblcart where sdate = '$date' && status = 'Sold' order by id desc limit 1");

    if(is_array($rows)){
        $num = (int)$rows[0]['trans_count'] + 1;
    }
    return $num;
}

	public function viewCount($qty,$id)
	{
		return $this->fetch("update tblproduct set view = view + :qty where id = :id limit 1",['qty' => $qty,'id' => $id]);
	} 
	public function lessQty($qty,$id)
	{
		return $this->fetch("update tblproduct set qty = qty - :qty where id = :id limit 1",['qty' => $qty,'id' => $id]);
	} 
}
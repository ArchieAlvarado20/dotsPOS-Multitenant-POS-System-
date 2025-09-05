<?php

namespace Queries;

use \Core\Database;

/**
 * Country model
 */
class Sales extends Database
{

		public function getTopSelling()
	{
		return $this->fetchAll("select image,p_name,description,view from tblproduct where category != 4 order by view desc limit 5");
	}

	public function todaySalesTable(string $date)
	{
		 return $this->fetchAll("select s.id,s.transno,p.p_name,p.description,s.qty,s.price,s.total,s.sdate,s.stime,u.first_name,s.status from tblcart s join tblproduct p on s.p_id = p.id join tblusers u on u.id = s.user_id where sdate = ? AND s.status='Sold'", [$date]);
	}

	public function salesTable(string $start,string $end,string $cashier)
	{
		 return $this->fetchAll("select s.id,s.transno,p.p_name,p.description,s.qty,s.price,s.total,s.sdate,s.stime,u.first_name,s.status from tblcart s join tblproduct p on s.p_id = p.id join tblusers u on u.id = s.user_id where (s.sdate between ? AND ?)  && s.status = 'Sold' AND u.first_name = ?  order by s.id desc", [$start,$end,$cashier]);
	}

	public function salesTableOnly(string $start,string $end)
	{
		 return $this->fetchAll("select s.id,s.transno,p.p_name,p.description,s.qty,s.price,s.total,s.sdate,s.stime,u.first_name,s.status from tblcart s join tblproduct p on s.p_id = p.id join tblusers u on u.id = s.user_id where (s.sdate between ? AND ?)  && s.status = 'Sold' order by s.id desc", [$start,$end]);
	}

	public function todayCashier(){
		return $this->fetchAll("select first_name from tblusers where deleted = 0 AND role = 'Cashier'");
	}

	public function todaySales(string $date){
		return $this->fetchAll("select sum(total) as total from tblcart where sdate = ? AND status = 'Sold'",[$date]);
	}

	public function totalSales(string $start,string $end, string $cashier){
		return $this->fetchAll("select sum(s.total) as total from tblcart s join tblusers u on u.id = s.user_id where (s.sdate between ? AND ?) AND u.first_name like '$cashier'  AND s.status = 'Sold'",[$start,$end]);
	}
		public function totalSalesOnly(string $start,string $end){
		return $this->fetchAll("select sum(total) as total from tblcart where (sdate between ? AND ?) AND status = 'Sold'",[$start,$end]);
	}

	public function small($date){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '11' && s.status = 'Sold' order by s.id desc",[$date]);
	}

	public function smallCup($date){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '11' && s.status = 'Sold' order by s.id desc",[$date]);
	}

		public function medium($date){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '22' && s.status = 'Sold' order by s.id desc",[$date]);
	}
	public function mediumCup($date){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '22' && s.status = 'Sold' order by s.id desc",[$date]);
	}
		public function large($date){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '33' && s.status = 'Sold' order by s.id desc",[$date]);
	}
		public function largeCup($date){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '33' && s.status = 'Sold' order by s.id desc",[$date]);
	}
	public function addons($date){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where s.sdate = ? and p.category = '44' && s.status = 'Sold' order by s.id desc",[$date]);
	}

	public function smallSort(string $start, string $end ,?string $cashier = null){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblusers u on u.id = s.user_id join tblproduct p on s.p_id = p.id where (s.sdate between ? and ? ) and p.category = '11' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}
	public function smallCupSort(string $start, string $end,?string $cashier = null){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id join tblusers u on u.id = s.user_id where (s.sdate between ? and ? ) and p.category = '11' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}
		public function mediumSort(string $start, string $end,?string $cashier = null){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblusers u on u.id = s.user_id join tblproduct p on s.p_id = p.id where (s.sdate between ? and ? ) and p.category = '22' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}
	public function mediumCupSort(string $start, string $end,?string $cashier = null){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id join tblusers u on u.id = s.user_id where (s.sdate between ? and ? ) and p.category = '22' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}
		public function largeSort(string $start, string $end,?string $cashier = null){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblusers u on u.id = s.user_id join tblproduct p on s.p_id = p.id where (s.sdate between ? and ? ) and p.category = '33' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}
	public function largeCupSort(string $start, string $end,?string $cashier = null){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id join tblusers u on u.id = s.user_id where (s.sdate between ? and ? ) and p.category = '33' && s.status = 'Sold' AND u.first_name = ? order by s.id desc",[$start,$end,$cashier]);
	}

	//no cashier

	public function smallSortOnly(string $start, string $end ){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where (s.sdate between ? and ? ) and p.category = '11' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
	public function smallCupSortOnly(string $start, string $end){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id where (s.sdate between ? and ? ) and p.category = '11' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
		public function mediumSortOnly(string $start, string $end){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where (s.sdate between ? and ? ) and p.category = '22' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
	public function mediumCupSortOnly(string $start, string $end){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id where (s.sdate between ? and ? ) and p.category = '22' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
		public function largeSortOnly(string $start, string $end){
		 return $this->fetchAll("select sum(s.total) as total from tblcart s join tblproduct p on p.id = s.p_id where (s.sdate between ? and ? ) and p.category = '33' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
	public function largeCupSortOnly(string $start, string $end){
		 return $this->fetchAll("select sum(s.qty) as qty from tblcart s join tblproduct p on p.id=s.p_id where (s.sdate between ? and ? ) and p.category = '33' && s.status = 'Sold' order by s.id desc",[$start,$end]);
	}
		
}

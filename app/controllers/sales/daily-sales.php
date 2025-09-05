<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Sales;

$sales = new Sales;

	$date = date('Y-m-d');
	// populate table 
	$data['sales'] = $sales->todaySalesTable($date);	

	// popualte todaySales
	$data['todaySales'] = $sales->todaySales($date);
	// populate cashier
	$data['cashier'] = $sales->todayCashier();
	//cups total
	$data['small'] = $sales->small($date);
	$data['medium'] = $sales->medium($date);
	$data['large'] = $sales->large($date);
	$data['smallCup'] = $sales->smallCup($date);
	$data['mediumCup'] = $sales->mediumCup($date);
	$data['largeCup'] = $sales->largeCup($date);

if(!empty($_POST)){
	//dd($_POST);die;

	//$data['cashier'] = $sales->cashier($_POST['cashier']);
	$cashier = $_POST['cashier'];
	//populate dates on tpl
	$_SESSION['cashier'] = $_POST['cashier'];
	$data['s'] = $_POST['start'];
	$data['e'] = $_POST['end'];
	
	$s = $_POST['start'];
	$e = $_POST['end'];

if(!empty($cashier)){

	// populate table 
	$data['sales'] = $sales->salesTable($s,$e,$cashier);	

	// popualte todaySales
	$data['todaySales'] = $sales->totalSales($s,$e,$cashier);

	//cups total
	$data['small'] = $sales->smallSort($s,$e,$cashier);
	$data['medium'] = $sales->mediumSort($s,$e,$cashier);
	$data['large'] = $sales->largeSort($s,$e,$cashier);
	$data['smallCup'] = $sales->smallCupSort($s,$e,$cashier);
	$data['mediumCup'] = $sales->mediumCupSort($s,$e,$cashier);
	$data['largeCup'] = $sales->largeCupSort($s,$e,$cashier);

}else{
// populate table 
	$data['sales'] = $sales->salesTableOnly($s,$e);	

	// popualte todaySales
	$data['todaySales'] = $sales->totalSalesOnly($s,$e);

	//cups total
	$data['small'] = $sales->smallSortOnly($s,$e);
	$data['medium'] = $sales->mediumSortOnly($s,$e);
	$data['large'] = $sales->largeSortOnly($s,$e);
	$data['smallCup'] = $sales->smallCupSortOnly($s,$e);
	$data['mediumCup'] = $sales->mediumCupSortOnly($s,$e);
	$data['largeCup'] = $sales->largeCupSortOnly($s,$e);
}

}

$ses = new Session;
if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .  ' | Daily Sales';
$data['user'] = $user->getById($ses->user('id'));

$template = new \Core\Template;
$template->render('sales.daily-sales', $data);
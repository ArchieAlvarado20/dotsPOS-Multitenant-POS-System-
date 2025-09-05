<?php

use \Auth\Session;
use \Auth\User;
use Queries\Costs;
use \Queries\Sales;

$sales = new Sales;
$costs = new Costs;

	$date = date('Y-m-d');
	// populate table 
	$data['costs'] = $costs->costsTable($date);	

	// popualte todaySales
	$data['todayCosts'] = $costs->costsTotal($date);

if(!empty($_POST)){
	//dd($_POST);die;

	//$data['cashier'] = $sales->cashier($_POST['cashier']);
	$direct = $_POST['direct'];
	//populate dates on tpl
	$data['s'] = $_POST['start'];
	$data['e'] = $_POST['end'];
	
	$s = $_POST['start'] ?? null;
	$e = $_POST['end'] ?? null;

if($direct == 'Direct'){

	// populate table 
	$data['costs'] = $costs->costsTableDirect($s,$e);	
	// dd($data['costs']);die;
	// popualte todaySales
	$data['todayCosts'] = $costs->costsTotalDirect($s,$e);

}else
if($direct == 'Indirect'){
// populate table 
	$data['costs'] = $costs->costsTableIndirect($s,$e);	
	// popualte todaySales
	$data['todayCosts'] = $costs->costsTotalIndirect($s,$e);
}else{
	// populate table 
	$data['costs'] = $costs->costsTableOnly($s,$e);	
	// popualte todaySales
	$data['todayCosts'] = $costs->costsTotalOnly($s,$e);
}
}

$ses = new Session;
if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .  ' | Daily Costs';
$data['user'] = $user->getById($ses->user('id'));

$template = new \Core\Template;
$template->render('costs.daily-costs', $data);
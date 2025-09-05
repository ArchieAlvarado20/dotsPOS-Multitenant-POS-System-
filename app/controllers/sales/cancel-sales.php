<?php

use \Auth\Session;
use \Auth\User;
use Queries\Cancel;

$ses = new Session;

if(!$ses->isLoggedIn())
	redirect('login');

$id = $params['id'];
$cancel = new Cancel;
$data['sales'] = $cancel->transDetails($id);
$data['admin'] = $cancel->selectAdmin();
$data['cashier'] = $cancel->selectCashier();
//dd($data['sales']);die;
if(!empty($_POST)){
	//dd($_POST);die;
	$_POST['t_id'] = $id;
	$_POST['p_id'] = $data['sales']->p_id;

	if($id && $cancel->insertCancel($_POST)){
			  $cancel->updateCancel($id);
	redirect("sales/daily-sales");
	}
}
$user = new User;
$data['title'] = APP_NAME .' | Sales';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('sales.cancel-sales',$data);
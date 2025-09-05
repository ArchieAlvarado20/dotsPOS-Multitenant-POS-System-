<?php

use \Auth\Session;
use \Auth\User;
use Queries\Cancel;

$ses = new Session;



if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Cancelled Items';
$user = new User;
$data['user'] = $user->getById($ses->user('id'));
$cancel = new Cancel;
$data['sales'] = $cancel->getCancelled();

$template = new \Core\Template;
$template->render('sales.cancelled-items',$data);
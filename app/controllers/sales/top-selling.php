<?php

use \Auth\Session;
use \Auth\User;
use Queries\Sales;

$ses = new Session;
$user = new User;
$sales = new Sales;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME . ' | Top Selling';
$data['user'] = $user->getById($ses->user('id'));
$data['sales'] = $sales->getTopSelling();

$template = new \Core\Template;
$template->render('sales.top-selling', $data);
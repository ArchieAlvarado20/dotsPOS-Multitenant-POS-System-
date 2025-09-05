<?php

use \Auth\Session;
use \Auth\User;
use Queries\Stocks;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME . ' | Daily Sales';
$data['user'] = $user->getById($ses->user('id'));

$stock = new Stocks;
$data['stocks'] = $stock->getSub();

$template = new \Core\Template;
$template->render('stocks.sub-storage', $data);
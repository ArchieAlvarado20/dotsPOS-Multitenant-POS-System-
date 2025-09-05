<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Stocks;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));

$items_raw = new Stocks;
$data['items_raw'] = $items_raw->getRaw();

$template = new \Core\Template;
$template->render('stocks.items-raw',$data);
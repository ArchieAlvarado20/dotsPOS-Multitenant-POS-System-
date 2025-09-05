			
<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Stocks;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME . ' | Daily Costs';
$data['user'] = $user->getById($ses->user('id'));

$inventory =new Stocks;
$data['inventory'] = $inventory->getInventory();

$template = new \Core\Template;
$template->render('stocks.inventory', $data);
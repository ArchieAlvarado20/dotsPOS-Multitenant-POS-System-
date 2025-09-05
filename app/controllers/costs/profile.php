<?php

use \Auth\Session;
use \Auth\User;
use Queries\Stocks;


$stocks = new Stocks;
$id = $params['id'] ?? null;
$data['product'] = $stocks->getById($id);


$ses = new Session;
if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Costs';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('costs.profile',$data);

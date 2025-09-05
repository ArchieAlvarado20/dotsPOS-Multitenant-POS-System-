<?php

use \Auth\Session;
use \Auth\User;
use Queries\Costs;

$ses = new Session;
$user = new User;
$cost = new Costs;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Billing';
$data['user'] = $user->getById($ses->user('id'));
$data['billing'] = $cost->getBilling();

$template = new \Core\Template;
$template->render('costs.billing', $data);
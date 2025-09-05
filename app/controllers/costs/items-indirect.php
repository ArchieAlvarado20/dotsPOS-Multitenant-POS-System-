<?php

use \Auth\Session;
use \Auth\User;
use Queries\Costs;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));

$items_indirect = new Costs;
$data['costs'] = $items_indirect->getIndirect();

$template = new \Core\Template;
$template->render('costs.items-indirect',$data);
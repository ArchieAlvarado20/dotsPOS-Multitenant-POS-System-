<?php

use \Auth\Session;
use \Auth\User;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));

$template = new \Core\Template;
$template->render('home.dash',$data);
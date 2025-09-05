<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Users;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));

$users = new Users;
$data['users'] = $users->getAll();

$template = new \Core\Template;
$template->render('users.user',$data);
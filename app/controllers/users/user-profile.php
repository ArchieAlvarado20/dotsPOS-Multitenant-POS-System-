<?php

use \Auth\Session;
use \Auth\User;
use Core\Validator;
use \Queries\Users;

$ses = new Session;

if(!$ses->isLoggedIn())
	redirect('login');

$users = new Users;
$id = $params['id'] ?? null;
$data['users'] = $users->getById($id);

$user = new User;
$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('users.user-profile',$data);
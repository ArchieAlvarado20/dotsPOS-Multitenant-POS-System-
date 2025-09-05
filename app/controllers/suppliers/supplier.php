<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Suppliers;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$supplier = new Suppliers;
$data['supplier'] = $supplier->getAll();

$template = new \Core\Template;
$template->render('suppliers/supplier',$data);
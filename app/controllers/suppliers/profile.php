<?php

use \Auth\Session;
use \Auth\User;
use Queries\Suppliers;

$ses = new Session;
$row= new Suppliers;
$id = $params['id'] ?? null;
$data['row'] = $row->getById($id);

if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Suppliers';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;


$template = new \Core\Template;
$template->render('suppliers.profile',$data);

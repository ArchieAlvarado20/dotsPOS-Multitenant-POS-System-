<?php

use \Auth\Session;
use \Auth\User;
use Queries\Cancel;

$ses = new Session;

if(!$ses->isLoggedIn())
	redirect('login');

$id = $params['id'];
$cancel = new Cancel;
$data['cancel'] = $cancel->getCancelDetails($id);
$user = new User;
$data['title'] = APP_NAME .' | Sales';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('sales.cancel-details',$data);
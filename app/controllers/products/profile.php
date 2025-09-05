<?php

use \Auth\Session;
use \Auth\User;
use Queries\Products;

$ses = new Session;
$product = new Products;
$id = $params['id'] ?? null;
$data['product'] = $product->getById($id);
if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Product';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;


$template = new \Core\Template;
$template->render('products.profile',$data);

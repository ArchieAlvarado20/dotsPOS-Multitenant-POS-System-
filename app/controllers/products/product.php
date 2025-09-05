<?php

use \Auth\Session;
use \Auth\User;
use Queries\Products;

$ses = new Session;
$user = new User;

if(!$ses->isLoggedIn())
	redirect('login');

$data['title'] = APP_NAME .' | Product';
$data['user'] = $user->getById($ses->user('id'));

$product = new Products;
$data['products'] = $product->getAll();

$template = new \Core\Template;
$template->render('products.product',$data);


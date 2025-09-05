<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use \Queries\Products;

$ses = new Session;


if(!$ses->isLoggedIn())
	redirect('login');

$data['errors'] = [];
if(!empty($_POST)){

	$val = new Validator($_POST);

	$val->setRules([
		'description'=>['Description',[['required','Last name is required'],'min:3']],
		'cost'=>['Cost',['max:30','numeric']],
	]);
	
	if($val->has_errors()){
		$data['errors'] = $val->errors;

	}else{
		//save to database
		$product = new Products;

//  dd($product);die;
		if($id = $product->createIndirect($_POST))
		{
			redirect('costs/items-indirect');
		}else{
			
		}
	}
}

$length = 6;
$data['beta'] = substr(str_shuffle("1234567890"),1,$length);
$user = new User;
$data['title'] = APP_NAME .' | Products';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('costs.indirect-new',$data);
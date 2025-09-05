<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use \Queries\Suppliers;

$ses = new Session;

if(!$ses->isLoggedIn())
	redirect('login');

$data['errors'] = [];
if(!empty($_POST))
{
	$val = new Validator($_POST);

	$val->setRules([
		'supplier'=>['Supplier',[['required','Last name is required'],'min:3','max:100']],
		'phone'=>['Phone',[['required','Last name is required'],'min:11','max:11','numeric', 'no_space']],
		'address'=>['Address',['required','Last name is required']],
		'contact_person'=>['Contact',[['required','Gender is required']]],
		 'email'=>['required','email','unique:tblsupplier'],
	]);
	
	if($val->has_errors()){
		$data['errors'] = $val->errors;

	}else{
		//save to database
		$supplier = new Suppliers;

// dd($_POST);die;

		if($id = $supplier->create($_POST))
		{
			redirect('supplier');
		}else{
			
		}
	}
}

$user = new User;
$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('suppliers.supplier-new',$data);
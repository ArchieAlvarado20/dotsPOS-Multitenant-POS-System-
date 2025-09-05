<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use Queries\Suppliers;



$suppliers = new Suppliers;
$id = $params['id'] ?? null;
$data['row'] = $suppliers->getById($id);

$data['errors'] = [];
if(!empty($_POST))
{
	//dd($_POST);die;
	$val = new Validator($_POST);

	$val->setRules([
		'supplier'=>['Supplier',[['required','Last name is required'],'min:3','max:30']],
		'phone'=>['Phone',[['required','Last name is required'],'min:11','max:11','numeric', 'no_space']],
		'address'=>['Address',['required','Last name is required']],
		'contact_person'=>['Address',['required','Last name is required']],
		'email'=>['required','email'],
	]);

	if($val->has_errors()){
		$data['errors'] = $val->errors;
	}else{
			//save to database
		$id = $params['id'] ?? null;
		// dd($oldImage);die;
		if($id && $suppliers->updateById($_POST,$id))
		{
			redirect('supplier/profile/'.$id);
		}else{
			
		}
	}
}
$ses = new Session;
if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Supplier';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('suppliers.edit',$data);
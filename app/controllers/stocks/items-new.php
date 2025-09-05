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
		're_order'=>['Re-order Level',['max:30','numeric','no_space']],
	]);
	
	if($val->has_errors()){
		$data['errors'] = $val->errors;

	}else{
		//save to database
		$product = new Products;

		 if(!empty($_FILES['image']['name']))
          {
            $_POST['image'] = $_FILES['image'];
          }

		$folder = "upload/";
          if(!file_exists($folder)){
            mkdir($folder,0777,true);
          }
          $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
          $destination = $folder . generate_filename();
          move_uploaded_file($_POST['image']['tmp_name'], $destination);
          $_POST['image'] = $destination;
//  dd($product);die;
		if($id = $product->createRaw($_POST))
		{
			redirect('items-raw');
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
$template->render('stocks.items-new',$data);
<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use Queries\Products;

$ses = new Session;

$product = new Products;
$id = $params['id'] ?? null;
$data['product'] = $product->getById($id);

$data['errors'] = [];
if(!empty($_POST))
{
//dd($_POST);die;
  if(!empty($_FILES['image']['name']))
    $_POST['image'] = $_FILES['image'];

	$val = new Validator($_POST);

	$val->setRules([
		'description'=>['Description',[['required','Last name is required'],'min:3']],
		'price'=>['Price',['max:30','numeric']],
	]);

	if($val->has_errors()){
		$data['errors'] = $val->errors;
	}else{
			//save to database
		$id = $params['id'] ?? null;
		// dd($oldImage);die;
		
         if(!empty($_POST['image']))
          {
			uploadImage();
				   //delete old image
            if(file_exists($data['users']->image))
            {
              unlink($data['users']->image);
            }
          }
         
		if($id && $product->updateById($_POST,$id))
		{
			redirect('product/profile/'.$id);
		}else{
			
		}
	}
}

if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Product';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('products.edit',$data);
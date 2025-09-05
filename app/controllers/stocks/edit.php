<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use Queries\Products;
use Queries\Stocks;

$ses = new Session;

$items = new Stocks;
$id = $params['id'] ?? null;
$data['row'] = $items->getById($id);

$data['errors'] = [];
if(!empty($_POST))
{
// dd($_POST);die;
  if(!empty($_FILES['image']['name']))
    $_POST['image'] = $_FILES['image'];

	$val = new Validator($_POST);

	$val->setRules([
		'description'=>['Description',[['required','Last name is required'],'min:3']],
		'cost'=>['Cost',['max:30','numeric']],
	]);

	if($val->has_errors()){
		$data['errors'] = $val->errors;
	}else{
			//save to database
		$id = $params['id'] ?? null;
		// dd($oldImage);die;
		$products = new Products;
         if(!empty($_POST['image']))
          {
			uploadImage();
				   //delete old image
            if(file_exists($data['row']->image))
            {
              unlink($data['row']->image);
            }
          }
         
		if($id && $products->updateById($_POST,$id))
		{
			redirect('items/profile/'.$id);
		}else{
			
		}
	}
}

if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Raw Items';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('stocks.edit',$data);
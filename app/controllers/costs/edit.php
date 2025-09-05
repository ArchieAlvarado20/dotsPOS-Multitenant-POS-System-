<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use Queries\Costs;

$ses = new Session;

$costs = new Costs;
$id = $params['id'] ?? null;
$data['product'] = $costs->getById($id);

$data['errors'] = [];
if(!empty($_POST))
{
//dd($_POST);die;
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
		
		if($id && $costs->updateById($_POST,$id))
		{
			redirect('costs/profile/'.$id);
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
$template->render('costs.edit',$data);
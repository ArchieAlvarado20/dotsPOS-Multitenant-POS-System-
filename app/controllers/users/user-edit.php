<?php

use \Auth\Session;
use \Auth\User;
use \Core\Validator;
use \Queries\Users;

$ses = new Session;

$users = new Users;
$id = $params['id'] ?? null;
$data['users'] = $users->getById($id);

$data['errors'] = [];
if(!empty($_POST))
{
//dd($_POST);die;
  if(!empty($_FILES['image']['name']))
    $_POST['image'] = $_FILES['image'];

	$val = new Validator($_POST);

	$val->setRules([
		'first_name'=>[
			'name'=>'First Name',
			'rules'=>[
				['required','Please add a first name'],
				['min:3','Name must be at least 3 characters long'],
				['max:30','Name must not exceed 30 characters'],
				'alpha'
			]
		],
		'last_name'=>['Last Name',[['required','Last name is required'],'min:3','max:30','alpha', 'no_space']],
		'phone'=>['Phone',[['required','Last name is required'],'min:11','max:11','numeric', 'no_space']],
		'address'=>['Address',['required','Last name is required']],
		'email'=>['required','email'],
	]);

	if($val->has_errors()){
		$data['errors'] = $val->errors;
	}else{
			//save to database
		$users = new Users;
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
         
		if($id && $users->updateById($_POST,$id))
		{
			redirect('user-profile/'.$id);
		}else{
			
		}
	}
}

if(!$ses->isLoggedIn())
	redirect('login');

$user = new User;
$data['title'] = APP_NAME .' | Dashboard';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('users.user-edit',$data);
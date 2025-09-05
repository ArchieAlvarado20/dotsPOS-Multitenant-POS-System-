<?php

use \Auth\Session;
use \Auth\User;
use \Queries\Users;
use \Core\Validator;

$ses = new Session;

if(!$ses->isLoggedIn())
	redirect('login');

$data['errors'] = [];
if(!empty($_POST))
{

	$val = new Validator($_POST);

	$val->setRules([
		'role'=>['Role',[['required','Please Choose the Role']]],
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
		'gender'=>['Gender',[['required','Gender is required']]],
		//'image'=>['Image',[['required','Image is required']]],
		// // 'dob'=>['Date of Birth',[['required','Enter your date of birth']]],
		// // 'country_id'=>['Country',[['required','Please select a Country']]],
		// // 'terms'=>['Terms',[['required','Please accept the terms & conditions']]],
		'email'=>['required','email','unique:tblusers'],
		'password'=>['Password',['required',['match:confirm_password','Make sure the passwords match']]],
	]);
	

	if($val->has_errors()){
		$data['errors'] = $val->errors;

	}else{
		//save to database
		$users = new Users;

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

		if($id = $users->create($_POST))
		{
			redirect('user');
		}else{
			
		}
	}
}

$user = new User;
$data['title'] = APP_NAME .' | User Account';
$data['user'] = $user->getById($ses->user('id'));
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('users.user-new',$data);

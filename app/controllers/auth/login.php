<?php

use \Auth\User;
use \Auth\Session;
use Queries\Products;

$data['errors'] = [];
if(!empty($_POST))
{

	//get user row
	$user = new User;
	$ses = new Session;
	if($row = $user->getByEmail($_POST['email']))
	{
		//dd($row);die;
		if(password_verify($_POST['password'], $row->password))
		{
			//success
			$ses->auth($row);
			flashMessage(mode: 'success',msg: 'Welcome '.$row->first_name);
			if($row->role == 'Admin')
				redirect('home');
			redirect('pos');
		}else{
			flashMessage(mode: 'danger',msg: 'Wrong email or password');
		}

	}else{
		//failed to login	
		flashMessage(mode: 'danger',msg: 'Wrong email or password');
	}

}
$data['title'] = APP_NAME . ' | Login Page';
$data['URL'] = $this->URL;

$template = new \Core\Template;
$template->render('auth.login',$data);
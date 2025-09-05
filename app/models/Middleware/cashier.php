<?php 

namespace Middleware;

use Core\Database;
use \Auth\Session;

class Cashier extends Database
{
    public function index()
    {
	$ses = new Session;
	if($ses->user('role') == 'Admin'){
        redirect('home');
    }else{
        
    }
}
}
<?php
use \Auth\Session;
use \Auth\User;

$ses = new Session;
$user = new User;


$data['title'] = 'admin | My Videos';

$template = new \Core\Template;
$template->render('auth.error-404', $data);
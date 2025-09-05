<?php
use Auth\Session;

$ses = new Session;
$ses->logout();
redirect('login');
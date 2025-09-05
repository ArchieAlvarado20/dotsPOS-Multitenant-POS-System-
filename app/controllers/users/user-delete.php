<?php

use Queries\Users;

$users = new Users;
$id = $params['id'];

if(!empty($id)){
    $users->deleteById($id);
    flashMessage(mode:'danger',msg:'User has been deleted!',to:'delete',bg:'danger');
    redirect('user');
}






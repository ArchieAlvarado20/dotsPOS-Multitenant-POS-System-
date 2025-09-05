<?php

use Queries\Suppliers;

$suppliers = new Suppliers;
$id = $params['id'];

if(!empty($id)){
    $date = date('Y-m-d H:i:s');
    $suppliers->deleteById($id);
    redirect('supplier');
}
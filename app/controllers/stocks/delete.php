<?php

use Queries\Products;

$products = new Products;
$id = $params['id'];

if(!empty($id)){
    $products->deleteById($id);
    redirect('items-raw');
}






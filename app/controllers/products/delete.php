<?php

use Queries\Products;

$products = new Products;
$id = $params['id'];

if(!empty($id)){
    $date = date('Y-m-d H:i:s');
    $products->deleteById($id);
    redirect('product');
}






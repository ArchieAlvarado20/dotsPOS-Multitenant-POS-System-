<?php

use \Core\Router as Router;

$router = new Router;

$router->get('/','home.php');
$router->get('/error-404','auth/error-404.php');

$router->get('/login','auth/login.php');
$router->get('/signup','auth/signup.php');
$router->get('/forgot','auth/forgot.php');
$router->get('/logout','auth/logout.php');

$router->get('/pos','POS/pos.php',['cashier']);
$router->post('/pos/ajax-pos','POS/ajax-pos.php');

$router->get('/admin','admin/admin.php');

$router->get('/home','home/dashboard.php',['admin']);

$router->group('/sales', function($r){
$r->get('/daily-sales','sales/daily-sales.php');
$r->get('/cancel-sales/{id}','sales/cancel-sales.php');
$r->get('/cancelled-items','sales/cancelled-items.php');
$r->get('/cancel-details/{id}','sales/cancel-details.php');
$r->get('/top-selling','sales/top-selling.php');

$r->post('/daily-sales','sales/daily-sales.php');
$r->post('/cancel-sales/{id}','sales/cancel-sales.php');
});

$router->group('/costs', function($r){
$r->get('/daily-costs','costs/daily-costs.php');
$r->get('/items-indirect','costs/items-indirect.php');
$r->get('/profile/{id}','costs/profile.php');
$r->get('/edit/{id}','costs/edit.php');
$r->get('/billing','costs/billing.php');
$r->get('/indirect-new','costs/indirect-new.php');

$r->post('/daily-costs','costs/daily-costs.php');
$r->post('/edit/{id}','costs/edit.php');
$r->post('/indirect-new','costs/indirect-new.php');
});
$router->get('/inventory','stocks/inventory.php');
$router->get('/supplier-main','stocks/main-storage.php');
$router->get('/main-sub','stocks/sub-storage.php');
$router->get('/return-main','stocks/return.php');

$router->group('/items', function($r){
$r->get('-raw','stocks/items-raw.php');
$r->get('/profile/{id}','stocks/profile.php');
$r->get('/edit/{id}','stocks/edit.php');
$r->get('-new','stocks/items-new.php');
$r->get('/delete/{id}','stocks/delete.php');

$r->post('-new','stocks/items-new.php');
$r->post('/edit/{id}','stocks/edit.php');
});

$router->group('/product', function($r){
$r->get('','products/product.php');
$r->get('-new','products/product-new.php');
$r->get('/profile/{id}','products/profile.php');
$r->get('/edit/{id}','products/edit.php');
$r->get('/delete/{id}','products/delete.php');

$r->post('-new','products/product-new.php');
$r->post('/edit/{id}','products/edit.php');
});

$router->group('/supplier', function($r){
$r->get('','suppliers/supplier.php');
$r->get('-new','suppliers/supplier-new.php');
$r->get('/profile/{id}','suppliers/profile.php');
$r->get('/edit/{id}','suppliers/edit.php');
$r->get('/delete/{id}','suppliers/delete.php');

$r->post('-new','suppliers/supplier-new.php');
$r->post('/edit/{id}','suppliers/edit.php');
});

$router->group('/user', function($r){
    $r->get('','users/user.php');
    $r->get('-new','users/user-new.php');
    $r->get('-profile/{id}','users/user-profile.php');
    $r->get('-edit/{id}','users/user-edit.php');
    $r->get('-delete/{id}','users/user-delete.php');

    $r->post('-new','users/user-new.php');
    $r->post('-edit/{id}','users/user-edit.php');
});
    
$router->post('/login','auth/login.php');
$router->post('/signup','auth/signup.php');

$router->get('/profile/{id}','profile.php');
$router->get('/profile/edit/{id}','profile.php');
$router->get('/profile/delete/{id}/{cat}','profile.php');

$router->run();

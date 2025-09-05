<?php

use Auth\Session;
use Auth\User;
use Queries\Products;

$ses = new Session;
//capture ajax data
$productClass = new Products;
$raw_data = file_get_contents("php://input");
if(!empty($raw_data))
{
    // dd($raw_data);die;
    $obj = json_decode($raw_data, true);
    if(is_array($obj))
    {
        if($obj['data_type'] == "search")
        {
            if($obj['text']){
                //search
                $barcode = $obj['text'];
                $text = "%".$obj['text']."%";
                $row = $productClass->get_search($text,$barcode);
            }else{
                //get all
                $row = $productClass->get_all();
            }
           
            if($row){

                foreach($row as $rows) {

                    $rows->description = strtoupper($rows->description);
                    $rows->image = crop($rows->image);
                }
                $info['data_type'] = "search";
                $info['data'] = $row;
                echo json_encode($info);
            } 
        }else
        if($obj['data_type'] == 'checkout')
        {
            $user = new User;
            $data = ($obj['text']);
            $user_id = $ses->user('id');
            $date    = date("Y-m-d");
            $time = date("H:i:sa");
            $transno = date("Ymd-His");
            $status = "Sold";
            $trans_count = 1;
          
            //fetch tblcart
            foreach ($data as $row){
                $check = $productClass->getById($row['id']);
                // dd($check);die;
                if(is_object($check)){           
                    //save to database
                    $arr = [];
                    $arr['p_id']          = $row['id'];
                    $arr['qty']           = $row['qty'];
                    $arr['price']         = $check->price;
                    $arr['total']         = $row['qty'] * $check->price;
                    $arr['status']        = $status;
                    $arr['sdate']         = $date;
                    $arr['transno']       = $transno;
                    $arr['stime']         = $time;
                    $arr['user_id']       = $user_id;
                    $arr['trans_count']   = $trans_count;
                    //nasa Product ang QUERY
                    $productClass->insertSales( 
                        $arr['transno'], 
                        $arr['qty'], 
                        $arr['price'], 
                        $arr['total'],  
                        $arr['sdate'], 
                        $arr['stime'], 
                        $arr['user_id'], 
                        $arr['p_id'], 
                        $arr['status'], 
                        $arr['trans_count'] 
                    );
                        $productClass->viewCount($row['qty'],$row['id']);
                        $productClass->lessQty($row['qty'],$row['id']);
                }
            }
            $info['data_type'] = "checkout";
            $info['data'] = "Payment rendered successfully";
            echo json_encode($info);
        }
    }
}




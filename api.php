<?php
header("Content-Type:application/json");

require ("Class.php");


if(!empty($_GET['get_all'])){
    $obj= new Div();
    $objParse = $obj->parse();
    get_all($objParse);}

function get_all($data){
    header("HTTP 1.1 $data");
    $jResponse = json_encode($data, JSON_PRETTY_PRINT);
    echo $jResponse;

}

if(!empty($_GET['search'])){
    $obj= new Div();
    $objParse = $obj->parse();
    get_all($objParse);}



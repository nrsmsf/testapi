<?php
header("Content-Type:application/json");
error_reporting(E_All);
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








if(!empty($_GET['search'])) {
    $kek = new Div();
    $kekParse = $kek->parse();
    $kekParse1 = (array)$kekParse;

//echo(json_encode($kekParse1));
    $tickerName = $_GET['search'];
    $needle = getTicket($tickerName, $kekParse1);
    //var_dump($needle);
    search($needle);

}

function search($data){
    header("HTTP 1.1 $data");
    $jResponse = json_encode($data, JSON_PRETTY_PRINT);
    echo $jResponse;

}


function getTicket($needle, $haystack){
    foreach ($haystack as $key=>$value)
    {
            if ($value['ticker'] == $needle) {
                return $haystack[$key];
            }

    }
    return false;
}

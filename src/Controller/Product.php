<?php
namespace APP\Controller;

require_once "../../vendor/autoload.php";

if(empty($_POST)){
    echo "Você não deveria estar aqui!!!";
    exit;
}

$productname=$_POST["name"];
$productprice=$_POST["price"];
$productquantity=$_POST["quantity"];


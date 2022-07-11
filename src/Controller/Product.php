<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once"../../vendor/autoload.php";

if (empty($_POST)){
    Redirect::redirect(
        message:"Requisição inválida!!",
        type :"error"
    );
}

$ProductName=$_POST["name"];
$ProductPrice=(float)$_POST["price"];
$ProductQuantity=(float)$_POST["quantity"];

$error = array();

if(!Validation::validateName($ProductName)){
   array_push($error, "O nome do produto deve conter pelo menos 5 caracteres!!!");
}

if(!Validation::validateNumber($ProductPrice)){
   array_push($error, "O preço do produto deve ser maior que zero!!!");
}

if(!Validation::validateNumber($ProductQuantity)){
    array_push($error, "A quantidade do produto deve ser maior que zero!!!");
 }

 if($error){
    Redirect::redirect(
        message: $error,
        type:'warning'
    );
 }else{
    $Product = new Product(
        name: $ProductName,
        quantity: $ProductQuantity,
        price: $ProductPrice
    );
    //-TODO-Salvar-no-banco-de-dados

    Redirect::redirect(
        message: "Produto cadastrado com sucesso!!!"
    );

}

    

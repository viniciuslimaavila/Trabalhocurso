<?php
namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Validation;
use APP\Utils\Redirect;

require_once"../../vendor/autoload.php";

if (empty($_POST)){
    Redirect::redirect(
        message:"Requisição inválida!",
        type:"error"
    );
}

$ProviderEmail=$_POST["email"];
$ProviderContato=$_POST["contato"];
$ProviderCNPJ=$_POST["CNPJ"];
$ProviderNome=$_POST["Nome"];

$error = array();

if(!Validation::validateEmail($ProviderEmail)){
   array_push($error, "O email deve conter @");
}

if(!Validation::validateContato($ProviderContato)){
   array_push($error, "O contato deve conter 9 caracteres!!!");
}

if(!Validation::validateCNPJ($ProviderCNPJ)){
    array_push($error, "O CNPJ deve conter 11 caracteres!!!");
}

if(!Validation::validateNome($ProviderNome)){
 array_push($error, "O nome deve conter apenas letras!!!");



 }

 if($error){
    Redirect::redirect(
        message: $error,
        type:'warning'
    );
 }else{
    $Provider = new Provider(
        Email: $ProviderEmail,
        Contato: $ProviderContato,
        CNPJ: $ProviderCNPJ,
        nome: $ProviderNome
    );
    //-TODO-Salvar-no-banco-de-dados

    Redirect::redirect(
        message: "Provedor cadastrado com sucesso!!!"
    );

}


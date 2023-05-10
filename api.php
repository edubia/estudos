<?php 

session_start();

$cep = $_POST['cep'];

$request = file_get_contents("https://viacep.com.br/ws/$cep/json/");

$response  = json_decode($request, true);

$_SESSION['address'] = $response;

header('location: home.php');

?>
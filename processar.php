<?php
require 'banco.php';
$carro = $_POST['numero_onibus'];
$motorista = $_POST['motorista_onibus'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$total = $_POST['total'];
$data_hoje = date('Y/m/d');


$banco = new Banco("localhost", "borges", "root", "");

$banco->insert("gastos", array(
    "carro" => $carro,
    "motorista" => $motorista,
    "produto" => $produto,
    "quantidade" => $quantidade,
    "total" => $total,
    "data_hoje" => $data_hoje
));

header("location: home.php");
?>
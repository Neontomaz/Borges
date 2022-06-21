<?php
    require '../../banco.php';
$user = $_POST['nome'];
$pass = ($_POST['senha']);

    $banco = new Banco ( "localhost", "borges", "root", "");

    $banco->query(" SELECT nome, senha FROM usuarios WHERE nome =  '".$user."'");

        $res = $banco->result();

        foreach ($res as $key => $dado) {
        
        }
        if($pass === $dado['senha']){
            header('location: ../../home.php');   
        }

?>
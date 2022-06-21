<?php
require_once 'banco.php';
?>


<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/consulta.css">
    <title>Historico</title>
</head>
<body>
    <div id="container">
        <section>
            <form action="#" method="post">
            <select name="seletor" id="buscador">
                <option value="" selected>SELECIONE O MÊS</option>
                <option value="20220131">JANEIRO</option>
                <option value="20220228">FEVEREIRO</option>
                <option value="20220331">MARÇO</option>
                <option value="20220430">ABRIL</option>
                <option value="20220531">MAIO</option>
                <option value="20220630">JUNHO</option>
                <option value="20220731">JULHO</option>
                <option value="20220831">AGOSTO</option>
                <option value="20220930">SETEMBRO</option>
                <option value="20221031">OUTUBRO</option>
                <option value="20221130">NOVEMBRO</option>
                <option value="20221231">DEZEMBRO</option>
            </select>
            </form>
        </section>
    </div>


<?php

$banco = new Banco("localhost", "borges", "root", "");/*
$banco->insert("usuarios", array(
    "id" =>1011,
    "nome" => "carlos",
    "senha" => md5('emillyhillary')
));*/
 

?>

</body>
</html>


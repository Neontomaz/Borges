<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/home.css"> 
    <title>Controle de Gestao</title>

</head>

<body>

<!-- PHP -->
<?php
require_once 'banco.php';
$banco = new Banco("localhost", "borges", "root", "");
$banco->query("SELECT * FROM gastos ORDER BY data_hoje LIMIT 5");
$dados = $banco->result();
         
            ?>
<!-- PHP -->

<img  src="./CSS/slogan2.jpg"  >


        <h3>Controle de Consumo Borges & Silva</h3>
<div id="container">

<button  id="navegate" class="btn btn-primary">Consultar por MÊS</button>
<button  id="navegate" class="btn btn-primary">Consultar por Carro</button>

    <section id="carros">

      <label for="onibus"> Selecione o Onibus:</label><br>
            <select name="onibus" id="onibus" onchange="mudar()">
            <option value="--">---</option>
            <option value="4110">4110</option>
            <option value="4111">4111</option>
            <option value="4112">4112</option>
            <option value="Anderson">4157</option>
            <option value="Jose">4159</option>
            <option value="Micheu">4160</option>
            <option value="Ernandes">4161</option>
            <option value="Antonio">4162</option>
            <option value="Rivaldo">4163</option>
            <option value="Tanga">4164</option>
            <option value="Cosme">4165</option>
            <option value="Sandro">4166</option>
        </select>
    </section>

    <label id="nomeLabel" for="nomeMotor">Motorista: </label>
    <div id="nomeMotor">Fulano
      
    </div>

    <div id="consumo">
        
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Descrever Itens
            </a>
    </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">

        <form action="processar.php" method="post">

        <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Carro</span>
                    <select name="numero_onibus" id="numero_onibus">
                    <option value="--">---</option>
                    <option value="4110">4110</option>
                    <option value="4112">4112</option>
                    <option value="4157">4157</option>
                    <option value="4159">4159</option>
                    <option value="4160">4160</option>
                    <option value="4161">4161</option>
                    <option value="4162">4162</option>
                    <option value="4163">4163</option>
                    <option value="4164">4164</option>
                    <option value="4165">4165</option>
                    <option value="4166">4166</option>
                </select>
            </div>


            <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Motorista</span>
                    <select name="motorista_onibus" id="motorista_onibus">
                    <option value="--">---</option>
                    <option value="4110">4110</option>
                    <option value="4112">4112</option>
                    <option value="Anderson">4157</option>
                    <option value="Jose">Jose</option>
                    <option value="Micheu">Micheu</option>
                    <option value="Ernandes">Ernandes</option>
                    <option value="Antonio">Antonio</option>
                    <option value="Rivaldo">Rivaldo</option>
                    <option value="Tanga">Tanga</option>
                    <option value="Cosme">Cosme</option>
                    <option value="Sandro">Sandro</option>
                </select>
            </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Data</span>
                        <input type="text" name="data_hoje" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Produto</span>
                        <input type="text" name="produto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>


                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Quantidade</span>
                        <input type="text" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>

                      <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Total</span>
                        <input type="text" name="total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>


                      
                      <button class="btn btn-primary" type="submit" id="enviar" >
                        Gravar Dados
                    </button>
        </form>
            </div>
        </div>
    </div>

</div>


<div id="painel">
        <table class="table table-striped" border="3">
            <tr>
                <td>Carro</td>
                <td>Motorista</td>
                <td>Produto</td>
                <td>Quantidade</td>
                <td>Total</td>
                <td>DATA</td>
            </tr>
         <?php
         foreach($dados as $dado){
  
            echo "<tr>";
            echo "<td>".$dado['carro']."</td>";
            echo "<td>".$dado['motorista']."</td>";
            echo "<td>".$dado['produto']."</td>";
            echo "<td>".$dado['quantidade']."</td>";
            echo "<td>".$dado['total']."</td>";
            echo "<td>".$dado['data_hoje']."</td>";
         }
         ?>
        </table>
    </div>

<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
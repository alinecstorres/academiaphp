<?php
//usando o método GET para capturar o valor do campo id do formulário
$id = $_GET['id'];
//fazendo a conexão
$link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //query SQL para selecionar os dados
 $lista = mysqli_query($link, "SELECT * FROM dadosnutri WHERE id='$id'");

 //coleta a linha solicitada
 $linha = mysqli_fetch_array($lista);
 ?>
<!DOCTYPE html>
<html>
 <head>
 <title>Formulario de cadastro</title>
 <style>
 body { text-align:center; }

 .retangulo {margin: auto; border: 1px solid black; position:
relative;}

 #ret {width: 450px; background-color: georgian;}

 #ret div {
 margin: 20px auto;
 width: 50px;
 height: 50px;
 }
 </style>
 </head>
 <body>
 <div id="ret" class="retangulo" style="text-align: center;" >
 <br />
 <label id="texto01">ATUALIZACAO DE DADOS</label>
 <br /><br />
 <form action="alterar.php" method="post">
 <p>Nome: <input type="text" name="nome" value="<?=
$linha['nome'] ?>" /></p>
 <p>Idade: <input type="number" name="idade" value="<?=
$linha['idade'] ?>" /></p>
 <p>Peso: <input type="number" name="peso" min="0" max="100" step=".01" value="<?=
$linha['peso'] ?>" /></p>
 <p>Altura: <input type="number" name="altura" min="0" max="100" step=".01" value="<?=
$linha['altura'] ?>" /></p>
 <input type="hidden" name="id" value="<?= $linha['id'] ?>" />
 <p><input type="submit" name="submit" value="alterar" /></p>
 </form>
</body>
</html>
<?php
 $link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //definindo as variaveis para receber os dados do formulario
 $id = $_POST['id'];
 $nome = $_POST['nome'];
 $idade = $_POST['idade'];
 $peso = $_POST['peso'];
 $altura = $_POST['altura'];
 $imc = ($peso / $altura)^2;

 $query = "UPDATE dadosnutri SET nome='$nome', idade='$idade', peso='$peso', altura='$altura', imc='$imc' WHERE id=$id";
 

 //executando o comando SQL
 mysqli_query($link, $query);

 //exibe mensagem de confirmação
 header("location: listacadastros.php");
?>
<?php
 $link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //definindo a variavel id utilizando o método GET
 $id = $_GET['id'];

 //criando a query em SQL para deletar os dados
 $query = "DELETE FROM dadosnutri WHERE id=$id";

 //executando o comando SQL
 mysqli_query($link, $query);

 //exibe mensagem de confirmação
 header("location: listacadastros.php");
?>

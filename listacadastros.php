<?php
//fazendo a conexão com o banco de dados test
$link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //query SQL para selecionar os dados
 $lista = mysqli_query($link, "SELECT * FROM dadosnutri");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
 border-collapse: collapse;
}
th, td {
 padding: 5px;
}
th {
 text-align: left;
}
</style>
</head>
<body>
<h2>Pessoas Cadastradas</h2>
<a href="cadastro.php"><button>Cadastro novo</button></a>
<table style="width:100%">
 <tr>
 <th>Nome</th>
 <th>Idade</th>
 <th>Peso</th>
 <th>Altura</th>
 <th>IMC</th>
 </tr>
<?php
//instrução de repetição while com a função mysqli_fetch_array
while($linha = mysqli_fetch_array($lista)) {
?>
 <tr>
 <td><?= $linha['nome'] ?></td>
 <td><?= $linha['idade'] ?></td>
 <td><?= $linha['peso'] ?></td>
 <td><?= $linha['altura'] ?></td>
 <td><?=$linha['imc'] ?></td>
 <td><a href="formularioalterar.php?id=<?= $linha['id'] ?>"><button style="background-color:#3065AC">Alterar</button></a></td>
 <td><a href="excluir.php?id=<?= $linha['id'] ?>"><button style="background-color:#BC544B" >Excluir</button></a></td>
 <td><a href="criarpdf.php?id=<?= $linha['id'] ?>"><button style="background-color:#5DBB63">Gerar PDF</button></td>
 </tr>
<?php
}
?>
</table>
</body>
</html>

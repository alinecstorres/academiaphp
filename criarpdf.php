<?php
//informa ao script que o arquivo fpdf.php é requerido
require 'fpdf/fpdf.php';
 $pdf = new FPDF('P','pt','A4');
 $pdf->AddPage();
 $pdf->Image('img/logo.png');
 $pdf->SetFont('arial','',12);
 $pdf->Cell(0,30,"DADOS DO PACIENTE",0,1,'L');
 $pdf->Cell(0,1,"","B",1,'C');
 $pdf->ln(20);
//conecta ao banco de dados
$link = mysqli_connect("localhost", "root", "", "test");

 //checando a conexão
 if(!$link) {
 printf ("Erro ao conectar ao banco de dados: ",
mysqli_connect_errno());
 }
 //definindo a variável id
 $id = $_GET['id'];

 //criando a query em SQL para selecionar os dados
 $lista = mysqli_query($link, "SELECT * FROM dadosnutri WHERE id=$id");
 //início do da estrutura de repetição
 while ($linha = mysqli_fetch_array($lista)) {
 $pdf->SetFont('arial','B',12);
 $pdf->Cell(30,20,"ID: ",0,0,'L');
 $pdf->setFont('arial','',12);
 $pdf->Cell(0,20,$linha['id'],0,1,'L');

 $pdf->SetFont('arial','B',12);
 $pdf->Cell(100,20,"Nome: ",0,0,'L');
 $pdf->setFont('arial','',12);
 $pdf->Cell(0,20,$linha['nome'],0,1,'L');

 $pdf->SetFont('arial','B',12);
 $pdf->Cell(100,20,"Idade: ",0,0,'L');
 $pdf->setFont('arial','',12);
 $pdf->Cell(0,20,$linha['idade'],0,1,'L');

 $pdf->Ln(20);

 $pdf->SetFont('arial','B',12);
 $pdf->Cell(100,20,"Peso: ",0,0,'L');
 $pdf->setFont('arial','',12);
 $pdf->Cell(0,20,$linha['peso'],0,1,'L');

 $pdf->SetFont('arial','B',12);
 $pdf->Cell(100,20,"Altura: ",0,0,'L');
 $pdf->setFont('arial','',12);
 $pdf->Cell(0,20,$linha['altura'],0,1,'L');
}
 //gerando o arquivo boletim.pdf
 $pdf->Output('paciente.pdf', 'I');
?>

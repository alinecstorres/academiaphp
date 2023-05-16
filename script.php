<?php

    $link = mysqli_connect("localhost", "root", "", "test");
    if(!$link) {
        printf ("Erro ao conectar ao banco de dados: ",
        mysqli_connect_errno());
    } 

    $nome = $_POST["nome"];
    $idade = $_POST["idade"]; 
    $peso = $_POST["peso"];    
    $altura = $_POST["altura"]; 
    $imc = ($peso / $altura)^2;

    $sql= "INSERT INTO `dadosNutri` (`nome`, `idade`, `peso`, `altura`,`imc`) 
            VALUES ('$nome', '$idade', '$peso', '$altura', '$imc')";
    
    if (mysqli_query($link, $sql)){
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Seu IMC é: $imc')
        window.location.href='listacadastros.php';</SCRIPT>");


    } else {
        echo "Erro:" .$sql. "<br>.mysqli_error($link)";
    }
        

    mysqli_close($link);

    
?>
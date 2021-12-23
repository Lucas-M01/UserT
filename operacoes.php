<?php
    session_start();
    include ("conexao.php");

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
    $peso = mysqli_real_escape_string($conexao, trim($_POST['peso']));
    $altura = mysqli_real_escape_string($conexao, trim($_POST['altura']));
    $imc = $peso/($altura * $altura);

    $enviar = "INSERT INTO pacientes (nome, idade, peso, altura, imc) VALUES ('$nome', '$idade', '$peso', '$altura', '$imc')";
        
    if($conexao->query($enviar) === TRUE){
        echo"<script language='javascript' type='text/javascript'>alert('Paciente cadastrado com sucesso!');window.location.href='capacientes.php'</script>";        
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse paciente');window.location.href='capacientes.php'</script>";
    }
    $conexao->close();

?>
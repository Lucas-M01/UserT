<?php
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from cadastro where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$erro = false;

if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}

foreach ( $_POST as $chave => $valor ) {
	$$chave = trim( strip_tags( $valor ) );
	
	// Verifica se tem algum valor nulo
	if ( empty ( $valor ) ) {
		$erro = "<script language='javascript' type='text/javascript'>alert('Existem campos em branco!');window.location.href='index.php'</script>";
	}
}

// Verifica se $email realmente existe e se é um email. 
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}

// Se existir algum erro, mostra o erro
if ( $erro ) {
	echo $erro;
} else {
	
	if($row == 1){
		$_SESSION['error'] = "Já existe este login";
		die();
	}else{
		$sql = "INSERT INTO cadastro (email, senha, nome) VALUES ('$email','$senha', '$nome')";
		if($conexao->query($sql) === TRUE){
			echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
		}else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";
		}
}	
}
$conexao->close();
?>
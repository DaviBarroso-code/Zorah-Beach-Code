<?php
session_start();
include("conexao.php");

/*$id = filter_input(INPUT_POST, 'idUsuário', FILTER_SANITIZE_NUMBER_INT); */
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$sql = "UPDATE usuário SET nome='$nome', email='$email', WHERE idUsuário='$id'";
$resultado = mysqli_query($connect, $sql);

if(mysqli_affected_rows($connect)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: admin.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}

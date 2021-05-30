<?php
session_start();
include("conexao.php");
 
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
if ($email=='KaisarBorges@gmail.com'){
    $tipo_de_acesso = "Adm";
}else{
    $tipo_de_acesso = "Cliente";
}

$sql = "INSERT INTO usuário (nome, email, senha, tipo_de_acesso) VALUES ('$nome', '$email', '$senha','$tipo_de_acesso')";
$resultado = mysqli_query($connect, $sql);

if($resultado== true){
    echo "<script>alert('Cadastrado com sucesso! Clique em ok para prosseguir!')</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=http://localhost/zorahbeach/Páginas/login.php">';
}else{
    echo "<script>alert('Erro ao cadastrar, tente novamente!')</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=http://localhost/zorahbeach/Páginas/cadastro.php">';
}
?>
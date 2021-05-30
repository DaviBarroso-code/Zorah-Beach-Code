<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "zorahbeachdb";

//Criar a conexao
$connect = mysqli_connect($host, $user, $password, $db);

//Verificar se a conexao ocorreu com sucesso
/*if(mysqli_connect_errno()){
    echo "Erro ao conectar:" .mysqli_connect_error();
}else{
    echo "OK!";
}*/
?>
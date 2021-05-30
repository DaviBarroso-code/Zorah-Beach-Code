<?php
session_start();
include('conexao.php');
  
    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        echo "<script>alert('Email e/ou Senha Vazios!Tente Novamente, ou Cadastre-se! Clique em Ok para ser redirecionado para atela de Cadastro!')</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=http://localhost/zorahbeach/Páginas/login.php">';
	exit();
    }

    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $query = "SELECT email and senha fROM usuário WHERE email = '{$usuario}' AND senha = '{$senha}'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_num_rows($result);

    //É o Administrador do sistema? Se sim página do BD
    if ($usuario == 'KaisarBorges@gmail.com' and $senha == 'zorahbeach123'){
        $_SESSION['admin']= true;
        $_SESSION['logado']= true;
        echo "<script>alert('Bem-vindo Administrador! Clique em OK para prosseguir!')</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=http://localhost/zorahbeach/Crud/Admin.php">';
        //header('Location:admin.php');
        exit();
    };
        

    //Checar o email e senha digitados com o banco.
    //Se tiver tudo ok vai pro Index.
    if($row == 1) {
	    $_SESSION['usuario'] = true;
        echo "<script>alert('Tudo OK! Sendo redirecionado para a dashboard, clique em OK!')</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=http://localhost/zorahbeach/Páginas/Index.php">';
	    //header('Location: ../Páginas/Index.php');
	exit();
    //Se não, volta pro cadastro.
    } else {
	    $_SESSION['usuario'] = false;    
        echo "<script>alert('Email e/ou Senha não Cadastrados ou Inválidos! Tente novamente!')</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="1; URL=http://localhost/zorahbeach/Páginas/login.php">';
	exit();
    }
    
?>
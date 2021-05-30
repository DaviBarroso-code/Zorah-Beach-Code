<?php
session_start();
include("conexao.php");

$id = filter_input(INPUT_GET, 'idUsuário', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT idUsuário and nome and email FROM usuário WHERE idUsuário = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<title>Editar</title>		
	</head>
	<body>
		<header>
			<a href="http://localhost/zorahbeach/Páginas/cadastro.php">Cadastrar</a><br>
			<a href="admin.php">Voltar</a><br>
		</header>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="Paraeditaruser.php">
			<label> Id:   </label>
			<input type="text" name="idUsuário" value="<?php echo $dados['idUsuário']; ?>"> <br><br>
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $dados['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $dados['email']; ?>"><br><br>
			
			<input type="submit" value="Editar">   
		</form>
	</body>
</html>
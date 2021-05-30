<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Zorah Beach| Login</title>
    <link rel="stylesheet" href="http://localhost/zorahbeach/Style/cadastro2.css" />
    <script type="text/javascript"> function Redirecionar(){window.location.replace('http://localhost/zorahbeach/Páginas/Cadastro.php');}</script>
  </head>
  <body>
    <section class="form-section">
      <h1>Login</h1>

      <div class="form-wrapper">
        <form action="http://localhost/zorahbeach/Crud/Fazerlogin.php" method="POST">
          <div class="input-block">
            <label for="login-email"> <h2>Email: <br> </h2> </label> 
            <input name="usuario" type="email" id="login-email" required />
          </div>
          <div class="input-block">
            <label for="login-password"> <h2>  Senha: <br> </h2> </label> <br> <br>
            <input name="senha" type="password" id="login-password" required />
          </div>
          <button type="submit" class="btn-login">Login</button> <br>
          <button type="replace" onclick="Redirecionar()" class="btn-login" name="cad">Não tem cadastro?</button>
        </form>
      </div>
    </section>
  </body>
</html>
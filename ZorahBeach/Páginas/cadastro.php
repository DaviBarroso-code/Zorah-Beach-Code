<!DOCTYPE html>
<head>
    <meta charset="UTF-¨8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <title>Zorah Beach| Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/zorahbeach/Style/cadastro2.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">
        <script type="text/javascript"> function Redirecionar(){window.location.replace('http://localhost/zorahbeach/Páginas/login.php');}</script>
        <section class="form-section">
        
            
                <h1>Cadastro</h1>
                <div class="form-wrapper">
                    <form name="form" action="http://localhost/zorahbeach/Crud/Fazercadastro.php" method="POST">

                    <div class="input-block">
                        <label for="cad-name">Nome Completo
                        <input type="name" id="cad-name" name="nome" required />
                        </label>
                        <span class="error"></span>
                        <span class="error"></span>
                    </div>
                    
                    <div class="input-block">
                        <label for="cad-email">Email
                        <input type="email" id="cad-email" name="email" required />
                        </label>
                        <span class="error"></span>
                    </div>

                    <div class="input-block">
                        <label for="cad-password">Senha
                        <input type="password" id="cad-password" name="senha" required />
                        </label>
                        <span class="error"></span>
                    </div>

                    <button type="submit" class="btn-login" name="cad" > <center> Cadastrar</center></button>

                    <br>

                    <button type="replace" onclick="Redirecionar()" class="btn-login" name="cad">Já possui uma conta?</button>

                    </form>
                </div>
        </section>
    </body>
</html>
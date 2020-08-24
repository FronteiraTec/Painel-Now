<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="public/assets/img/dce-logo.png">
    <link rel="stylesheet" href="public/assets/css/loga.css">
    <title>Login</title>
</head>

<body>
    <header class="main-header">
        <img src="public/assets/img/dce-logo.png" alt="dce-logo" width="130">
    </header>

    <div class="container-login">
        <h3> Entrar no Painel Administrativo</h3>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <form  action="app/controller/login.php" method="post">
            <div class="modal-content animate">
                <div class="container">
                    <label for="Usuario"><b>Usuario</b></label>
                    <input type="text" placeholder="Enter Username" name="usuario" name="text" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="senha" required>

                    <button id="entrar" value="entrar" type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lembre de mim
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <a type="button" href="index.html" class="cancelbtn">Cancel</a>
                    <span class="psw">Esqueceu a  <a href="#">senha</a></span>
                </div>
            </div>
            
        </form>
    </div>
    <footer>
        <br><br>
        <p>© Copyright 2020</p>
    </footer>
</body>
</html>
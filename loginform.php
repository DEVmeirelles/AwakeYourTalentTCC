<?php
session_start();

if (isset($_GET['logout'])) {
    unset($_SESSION['ID_user']);
}

include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" hfref="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <div class="login-container">
        <div class="login">
            <div>
                <h4 class="login-title"> Bem vindo de volta!</h4>
                <form action="" method="POST">
                    <div class="input">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="textbox" placeholder="Digite seu e-mail">
                    </div>
                    <div class="input">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" class="textbox" placeholder="Digite sua Senha">
                    </div>
                    <button onclick='logar()' id="show-toast" class="show-toast"> Logar </button>
            </div>
            </form>
            <div class="to-register">
                <label>Não está Registrado? &nbsp; <a href="formulario.php">Registre-se</a></label>
            </div>
        </div>

        <aside>
            <img src="./assets/images/loginbg1.png" alt="">
        </aside>

        <img class="bg-corner" src="./assets/images/loginbg2.svg" alt="">



    </div>

<script>
    toastr.options.positionClass = "toast-bottom-right";
</script>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (strlen($_POST['email']) == 0) {
        $errors[] = "Preencha seu e-mail";
    } if (strlen($_POST['password']) == 0) {
        $errors[] = "Preencha sua senha";
    }

    if(count($errors) === 0) {

        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM cadastro_usuario WHERE email = '$email' AND password ='$password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução  do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }


            // die(var_dump($usuario));
            $_SESSION['ID_user'] = $usuario['ID_user'];
            $_SESSION['name'] = $usuario['name'];

            header('Location: /');
        } else {
            ?>
            <script>
                toastr.error("email e/ou senha estão incorretos");
            </script>
        <?php
        }
     } else {
        ?>
        <script>
        <?php

        foreach($errors as &$error) {
            echo("toastr.error(\"$error\"); \n");
        }

        ?>
        </script> 

        <?php
    }
  }
?>

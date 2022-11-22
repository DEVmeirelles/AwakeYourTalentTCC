
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <div class="signup-container">
        <aside>
            <img src="./assets/images/aside-form-img.png" alt="">
        </aside>
        <div class="cadastro">
            <h4 class="form-title">Preecha suas informações para registrar-se!</h4>
            <form action="formulario.php" method="POST">
                <div class="input">
                    <label for="register">Nome completo:</label>
                    <input type="text" name="name" class="textbox" placeholder="Insira seu nome completo">
                </div>
                <div class="input">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="insira seu e-mail" class="textbox">
                </div>
                <div class="input">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="textbox" placeholder="Insira sua senha">
                </div>
                <div class="input">
                    <label for="passwordconfirm">Confirme sua senha:</label>
                    <input type="password" name="passwordconfirm" class="textbox" placeholder="Confirme sua senha">
                </div>
                <button onclick='cadastrar()'>Enviar</button>
            </form>
            <div class="to-login">
                <label>Já está cadastrado?&nbsp;<a href="loginform.php">Loge-se</a></label>
            </div>
            <div class="icon-img">
                <a href="https://wa.me/5514997597300"><img src="./assets/images/w-icon.png" alt=""></a> &nbsp; &nbsp;
                <a href=""><img src="./assets/images/t-icon.png" alt=""></a> &nbsp;
                <a href=""><img src="./assets/images/i-icon.png" alt=""></a>
            </div>
        </div>
    </div>
</body>

    <?php
    include('config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors;

    if (strlen($_POST['name']) == 0) {
        $errors[] = "Preencha seu nome";
    } if (strlen($_POST['email']) == 0) {
        $errors[] = "Preencha seu e-mail";
    } if (strlen($_POST['password']) == 0){
        $errors[] = "Preencha sua senha";
    } if (strlen($_POST['passwordconfirm']) == 0){
        $errors[] = "Confirme sua senha";
    }

    if(count($errors) === 0) {
        $name = $mysqli->real_escape_string($_POST['name']);        
        $email = $mysqli->real_escape_string($_POST['email']);        
        $password = $mysqli->real_escape_string($_POST['password']);        
        $passwordconfirm = $mysqli->real_escape_string($_POST['passwordconfirm']);        


    $in = mysqli_query($mysqli, "INSERT INTO cadastro_usuario(name, email, password)
      VALUES ('$name','$email','$password')") or die(mysqli_error($mysqli));
        if ($in) {
            header('Location: loginform.php ');
        }
    } else {
        ?>
        <script>
            toastr.options.positionClass = "toast-bottom-right";
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

</html>



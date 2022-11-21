<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@500&family=Roboto:wght@500&family=Inter&display=swap" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>Cadastro</title>
</head>
<body>
</body>
</html>



<?php
include('config.php');

if(isset($_POST['name']) || isset($_POST['email'])) {
    if (strlen($_POST['name']) == 0) {
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.options.positionClass = "toast-bottom-right";
                toastr.error('Preencha seu nome!');
            });
        </script>
        <?php
    } else if (strlen($_POST['email']) == 0) {
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.options.positionClass = "toast-bottom-right";
                toastr.error('Preencha seu email!');
            });
        </script>
        <?php
    } if (isset($_POST['passsword']) || isset($_POST['passwordconfirm'])) {
     if (strlen($_POST['password']) == 0){
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.options.positionClass = "toast-bottom-right";
                toastr.error('Preencha sua senha');
            });
        </script>
        <?php
    } else if (strlen($_POST['passwordconfirm']) == 0){
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.options.positionClass = "toast-bottom-right";
                toastr.error('Confirme sua senha!');
            });
        </script>
        <?php
    } else {

        $name = $mysqli->real_escape_string($_POST['name']);        
        $email = $mysqli->real_escape_string($_POST['email']);        
        $password = $mysqli->real_escape_string($_POST['password']);        
        $passwordconfirm = $mysqli->real_escape_string($_POST['passwordconfirm']);        


$in = mysqli_query($mysqli, "INSERT INTO cadastro_usuario(name, email, password)
      VALUES ('$name','$email','$password')") or die(mysqli_error($mysqli));
if ($in) {
    header('Location: loginform.php ');
        }
    }
  }
}

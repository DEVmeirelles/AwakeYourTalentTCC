<?php
session_start();

if (!isset($_SESSION['ID_user'])) {
  header("Location: /loginform.php");
}
?>



if (isset($_POST['name']) and isset($_POST['email'])) and isset($_POST['password'])) and isset($_POST['passwordconfirm'])){
    if (strlen($_POST['name, email, password, passwordconfirm']) == 0){
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.options.positionClass = "toast-bottom-right";
                toastr.error('Preencha todas as informações!',0,);
            });
        </script>
    <?php
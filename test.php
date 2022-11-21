<html>
  <body>
    <a id='linkButton'>ClickMe</a>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      
    <script type="text/javascript">
      $(document).ready(function() {
        $('#linkButton').click(function() {
           toastr.success('Click Button');
        });
      });
    </script>
  </body>
</html>

<?php
// códidigo referene ao erro de senha ou email 

    }else if (strlen($_POST['password, email']) == 0) {
  ?>
      <script type="text/javascript">
          $(document).ready(function() {
              toastr.options.positionClass = "toast-bottom-right";
              toastr.error("Seu e-mail ou senha estão incorretos!");
          });
      </script>;
  <?php 

      }



?>
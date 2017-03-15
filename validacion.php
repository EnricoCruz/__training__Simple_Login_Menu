<style>

  body{
    position: relative;
  }
  p.Mensaje{
    width: 40%;
    font-size: 2em;
    text-align: center;
    position:absolute;
    top: 40%; left: 50%;
    display: none;

    transform: translate(-50%, -50%)
  }

  .correcto{
    background: #9ce682;
  }
  .incorrecto{
    background: #ed796d;
  }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $(".Mensaje").show("slow");
  });
</script>


<?php
  if(isset($_POST["enviar"])){

    $usuario= $_POST["user_name"];
    $contra = $_POST["user_pass"];

    if($usuario=="Enrico96" && $contra=="1234asdf"){
      echo "<p class=\"Mensaje correcto\">Bienvenido: $usuario</p>";
    }
    else {
      echo "<p class=\"Mensaje incorrecto\">Acceso inautorizado</p>";
    }
  }
 ?>

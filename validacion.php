<head>
  <meta charset="utf-8">
<style>

  body{
    position: relative;
    background: url("forest.jpg");
    background-size: 110%;
    background-repeat: no-repeat;
    background-position: center;

    color: white;

  }
  body h1{
    text-align: center;
    font-size: 3em;
    font-family: monospace;
    border-bottom: 3px solid white;
    width: 80%;
    margin:auto;
  }
  p.Mensaje{
    width: 40%;
    font-size: 2em;
    text-align: center;
    position:absolute;
    top: 40%; left: 50%;
    display: none;
    border-radius: 5px;
    padding:10px;

    transform: translate(-50%, -50%);
  }
  p.Fin{
    font-size: 2em;
    text-align: center;
    position: absolute;
    top:50%; left: 50%;
    border-radius: 5px;
    padding:10px;
    display:none;

    transform: translate(-50%, -50%);
  }

  .correcto{
    background: #9ce682;
  }
  .incorrecto{
    background: #ed796d;
  }
</style>
</head>

<body>
  <h1>Mensaje Informativo</h1>
  <div class="alert">

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

    <p class="Fin">Fin de demostración</p>
  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".Mensaje").show("slow", function(){
        $(".Fin").fadeIn("slow");
      });
    });
  </script>



</body>

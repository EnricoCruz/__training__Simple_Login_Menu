<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!-- submit font-->
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous">
  // </script>   <!-- JQUERY -->
</head>
<body>
  <div class="global">

    <div class="title">
      Demo de Menú Login
    </div>
    <div class="container">
      <form action="validacion.php" method="post" target="_self" id="login_user" >
        <div class="loginTitle">
          Inicio de cuenta: <span class="cross"> ✖ </span>
        </div>
          <div class="input_block">
            Usuario: <input type="text" name="user_name" id="user_name">
            <div class="input_error">Nombre demasiado corto</div>
          </div>  <br>
          <div class="input_block">
            Contraseña: <input type="password" name="user_pass" id="user_pass">
            <div class="input_error">Contraseña demasiado corta</div>
          </div> <br>
          <div class="input_block"><input type="button" value="Iniciar Sesión"
             id="enviar" name="enviar"></div>
      </form>
    </div>
    <footer>
      Realizado por Enrico Cruz
    </footer>
  </div>
<script>
  document.getElementById("user_name").addEventListener("keypress", valorar);
  document.getElementById("user_pass").addEventListener("keypress", valorar);
  document.getElementById("user_name").addEventListener("change", valorar);
  document.getElementById("user_pass").addEventListener("change", valorar);


  function valorar(){
    var errorText = this.parentNode.childNodes[3];
    if (this.value.length< 5){
      console.log("bien");
      errorText.style.visibility="visible";
    } else {
      errorText.style.visibility="hidden";
      console.log("mal");
    }
  }



</script>
<script>
  $(document).ready(function(){
    $(".container div.input_block").click(function(event){
      oscurecer();
      event.stopPropagation();
    });
    $("span.cross").on("click",aclarar);
    $(".global").click(function(event){
      aclarar();
    })

    function oscurecer(){
        $("body").css({"background-image":'url(forest_dark.jpg)', "background-size":"120%"});
        $(".container").css("background",'rgba(193, 193, 193, 0.5)');
        $("span.cross").css({"filter":"opacity(1)", "display":"inline"});
        $(".global").css({"cursor":"pointer"});
    }
    function aclarar(){
      $("body").css({"background-image":'url(forest.jpg)', "background-size":"110%"});
      $(".container").css("background",'rgba(193, 193, 193, 0.7)');
      $("span.cross").css({"filter":"opacity(0)", "display":"none"});
      $("#login_user").trigger("reset");
      $(".global").css({"cursor":"inherit"});
    }

    $("#enviar").click(function(){
      var nombre = document.getElementById("user_name").value;
      var pass = document.getElementById("user_pass").value;
      console.log("realizando operacion");
      $.ajax({
        type: "POST",
        url: "nueva_validacion.php",
        data: {
          user_name:nombre,
          user_pass:pass
        },
        success: function(data){alert(data);console.log(data); window.location = "validacion.php"}
        });


    });
  });
</script>
<script>

</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <!-- submit font-->
  <title>Document</title>
  <style>
    *{
      margin: 0px;
      box-sizing: border-box;
    }
    body{
      background: url("forest.jpg");
      background-size: 110%;
      background-repeat: no-repeat;
      background-position: center;

      transition: background .4s;
    }

    .global{
      height: 100vh;
      position: relative;

    }
    .container{
      /*border: 2px solid #999999;*/
      border-radius: 8px;
      position: absolute;
      background: rgba(193, 193, 193, 0.7);
      color: white;

      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width:auto;
      padding: 15px;
      display: inline-block;
      /*box-shadow: 0px 2px 20px rgb(115, 115, 115);*/
      transition: background:.4s;
    }


      .container div.loginTitle{
        text-align: center;
        margin: 0px auto 10px auto;
        width: 100%;
        display: block;
        font-family: 'cabin', sans-serif;
        border-radius: 4px;
      }
      .container div.loginTitle span.cross{
        border-radius: 30%;
        padding: 4px;
        position: absolute;
        top: 0%;
        right: 3%;
        font-size: 1.2em;
        filter: opacity(0);
        transition: filter .3s;
        display: none;

      }
      .container div.loginTitle span.cross:hover{
        color: black;
        cursor: pointer;
      }
      .container div.input_block{
        width: 100%;
        color: inherit;
      }
      .container div.input_block input{
        width: 100%;
        border-radius: 4px;
        font-family: 'cabin', sans-serif;
        font-size: 1.1em;
      }
      .container div.input_block input[type=submit]{
        box-shadow: 0px -1px 1px grey;
        cursor: pointer;
        background: linear-gradient(#bfbfbf, #c4c4c4, #e7e7e7);
        color: #595959;
        font-weight: 600;
        font-size: 1.25em;
        letter-spacing: 1px;
        font-family: 'Roboto', sans-serif;

      }
      .container div.input_block input[type=submit]:hover{
        filter: brightness(106%);


      }
  div.input_error{
    visibility: hidden;
    color: #ffffff;
    font-size: .8em;
  }

  </style>
  <style>
    div.title{
      position:absolute;
      text-align: center;
      color: rgb(240, 240, 240);
      text-shadow: 0px 0px 5px grey;
      margin-top: 15%;
      width: 100%;
      font-size: 2em;
      font-family: 'cabin'
    }
    footer{
      position: absolute;
      bottom: 1%;
      width: 100%;
      text-align: center;
      color: rgba(255, 255, 255, 0.63);
    }
  </style>
</head>
<body>
  <div class="global">

    <div class="title">
      Demo de Menú Login
    </div>
    <div class="container">
      <form action="validacion.php" method="post" target="_blank" id="login_user" >
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
          <div class="input_block"><input type="submit" value="Iniciar Sesión" id="enviar" name="enviar"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $()
    $(".container div.input_block").on("click",oscurecer);
    $("span.cross").on("click",aclarar);

    function oscurecer(){
        $("body").css({"background-image":'url(forest_dark.jpg)', "background-size":"120%"});
        $(".container").css("background",'rgba(193, 193, 193, 0.5)');
        $("span.cross").css({"filter":"opacity(1)", "display":"inline"});
    }
    function aclarar(){
      $("body").css({"background-image":'url(forest.jpg)', "background-size":"110%"});
      $(".container").css("background",'rgba(193, 193, 193, 0.7)');
      $("span.cross").css({"filter":"opacity(0)", "display":"none"});
      $("#login_user").trigger("reset");
    }
  });
</script>

</body>
</html>

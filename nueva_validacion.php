<?php

session_start();

if (isset($_POST["user_name"]) && $_POST["user_name"] != NULL){
  $usuario= $_POST["user_name"];
  $contra = $_POST["user_pass"];
  echo "USUARIO: ".$usuario."\nPASS: ".$contra;
}
else {
  echo "Usuario or Contraseña are empty... \n
WARNING!: Do not put your own passwords here, this is only an experimental excercise.";
}


$_SESSION["usr"] = $usuario;
$_SESSION["pass"] = $contra;
 ?>

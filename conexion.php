<?php
  
  $host="localhost";
  $user="root";
  $pass= "";

  $db = "registros";

  $conexion = mysqli_connect($host,$user,$pass, $db);

  if (!$con){
    echo "Conexion fallida";
  }
<?php

  //Si las variables están establecidas y no son nulas continuamos
  //Si vale 0, también debe entrar aquí. 
  if(isset($_POST["rojo"]) && (!empty($_POST["rojo"]) || $_POST["rojo"]==0)
      && isset($_POST["verde"]) && (!empty($_POST["verde"]) || $_POST["verde"]==0)
          && isset($_POST["azul"]) && (!empty($_POST["azul"]) || $_POST["azul"]==0)){

    //Obtenemos las variables
    $rojo = $_POST["rojo"];
    $verde = $_POST["verde"];
    $azul = $_POST["azul"];

    //Comprobaciones
    //Si tienen un valor correcto, entre 0 y 255
    if(($rojo >= 0 && $rojo < 256)
      && ($verde >= 0 && $verde < 256)
        && ($azul >= 0 && $azul < 256)){
      //Obtenemos cada valor en hexadecimal
      echo "El color en Hexadecimal es:</br>";
      echo "#".dechex($rojo).dechex($verde).dechex($azul)."</br>";
    }
    else{
      echo "No se ha definido una longitud adecuada para uno o más de los colores necesarios";
    }
  }
  else{
    echo "En principio no debe entrar aquí porque en el formulario es required";
  }






















?>

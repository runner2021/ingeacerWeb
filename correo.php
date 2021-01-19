<?php



          $nombre=$_POST['nombre'];
          $apellidos=$_POST['apellidos'];
          $telefono=$_POST['telefono'];
          $correo=$_POST['correo'];
          $mensaje=$_POST['asunto']; 

          if(isset($_POST['enviar'])){
          
          $header="From:".$correo."\r\n";
          $header .="X_Miller:PHP/".phpversion()."\r\n";
          $header .="Content-Type:text/plain";
          $header .="Mime-Version=1.0\r\n";

          $mensaje="Este menesaje fue enviado por".$nombre."\r\n";
          $mensaje .="Apellidos : ".$apellidos."\r\n";
          $mensaje .="Telefono : ".$telefono."\r\n";
          $mesanaje .="Correo: " .$correo. "\r\n";
          $mensaje .="Asunto : ". $mensaje. "\r\n";


          $para="info@ingeacer.es";
          $asunto="paginaWeb";
          mail($para,$asunto,utf8_decode($mensaje),$header);

          

         

          }
      









?>
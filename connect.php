<?php
   $conn = mysqli_connect("localhost", "root", "", "myapp");
   $server = "localhost";
   $usuario = "root";
   $senha = "";
   $banco = "myapp";
   $conn = mysqli_connect($server, $usuario, $senha);
   $db = mysqli_select_db($conn, $banco);

?>
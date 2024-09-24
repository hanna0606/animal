<?php
$hostname ="localhost";
$bancosdedados ="bancosdedados";
$usuario ="root";
$senha ="";

$mysqli = new mysqli ($hotsname.$usuario$senha,$bancodedados);
if ($mysqli->connect_errno) {
   echo "falhar ao conectar:"(", $mysqli->connect_errno . ")" . $mysqli-> connect_error;
}
   else echo "conectado";

   ?>
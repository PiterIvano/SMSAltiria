<?php

// usuario en el sistema.
include('httpPHPAltiria.php');

$altiriaSMS = new AltiriaSMS();

$altiriaSMS->setLogin('poner sus credenciales');
$altiriaSMS->setPassword('poner su pass');

$altiriaSMS->setDebug(true);

$mensaje = $_POST["mensaje"];
$numero = $_POST["phone"];

$sDestination = $numero;

$response = $altiriaSMS->sendSMS($sDestination, $mensaje);

if (!$response)
  echo "El envío ha terminado en error";
else
  echo $response;
?>


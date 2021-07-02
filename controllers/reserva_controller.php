<?php
require_once("../models/Reserva_model.php");
require_once("../models/Sede_model.php");


$carro = new Reserva();
$datos = $carro->getReserva();



$sede = new Sede();

$dataSede = $sede->getSede();

// require_once("../views/vista.php");

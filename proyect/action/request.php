<?php

// Recojo los parámetros enviados en el requests
$number = (isset($_GET['number'])) ? $_GET['number'] : NULL;
$name = (isset($_GET['name'])) ? $_GET['name'] : NULL;

if (($number !== NULL) && ($name !== NULL)) {
    // Cargo las librerias necesarias y los controladores
    require_once '../libs/MysqlConnection.php';
    require_once '../models/BoletoModel.php';

    BoletoModel::setBoleto($number, $name);
    echo 1;
}  else {
    echo 0;
}


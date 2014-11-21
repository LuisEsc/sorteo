<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MysqlConnection
 *
 * @author Developer-00
 */
class MysqlConnection {

    // Instancia de la conexión
    private static $instance = null;
    // Datos del acceso a la base de datos
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $port = "3306";
    private static $db = "sorteo";

    public static function getConnection() {
        if (!is_object(self::$instance)) {
            self::$instance = new mysqli(self::$host, self::$user, self::$pass, self::$db, self::$port);
        }
        return self::$instance;
    }

}

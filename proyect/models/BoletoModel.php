<?php

/**
 * Description of BoletoModel
 *
 * @author Developer-00
 */
class BoletoModel {

    public static function getBoletos() {
        $con = MysqlConnection::getConnection();
        $result = $con->query("SELECT * FROM `boletos`");
        $array = array('rows' => array());
        while ($row = mysqli_fetch_assoc($result)) {
            $array['rows'][] = $row;
        }
        $con->close();
        return (array) $array;
    }

    public static function setBoleto($num, $name) {
        $con = MysqlConnection::getConnection();
        $sql = "INSERT INTO `boletos` (`idboleto`, `number`, `name`) VALUES (NULL, ?, ?)";
        $sentence = $con->prepare($sql);
        $sentence->bind_param('ss', $num, $name);
        $sentence->execute();
        $con->close();
    }

}

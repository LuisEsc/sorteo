<?php
include_once './initialize.php';
$con = MysqlConnection::getConnection();
//BoletoModel::setBoleto('0002', "luis");
$rows = BoletoModel::getBoletos()['rows'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Título</title>
        <!-- css type -->
        <link type="text/css" rel="stylesheet" href="./css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="./css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="./css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
        <!-- javascript type -->
        <script type="text/javascript" src="./js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="./js/boleto.js"></script>

    </head>
    <body>
        <div id="loader" class="load"></div>
        <div id="rawContainer"></div>
        <!-- <button onclick="parar();"></button> -->

        <script type="text/javascript">
            var contentName = "rawContainer";
            $(document).ready(function () {
                // Alto de la pantalla
                $('#rawContainer').css('height', window.innerHeight + "px");

                for (var i = 1; i <= <?php echo count($rows); ?>; i++) {
                    var b = new Boleto(i);
                    b.draw(contentName);
                }
                //load();
                explore();
            });
            
            function load() {
                for (var i = 0; i <= 100; i++) {
                    $('#loader').css("width", i + "%");
                }
            }

            function explore() {
                var i = 0;
                setInterval(function () {
                    if (i < $('.boleto').length) {
                        $('.boleto').each(function () {
                            removeSelection(this);
                        });
                        addSelection($('.boleto').get(i++));
                    } else {
                        i = 0;
                    }
                }, 0);
            }

            function removeSelection(element) {
                $(element).attr('selected', false);
                $(element).removeClass('selected');
            }

            function addSelection(element) {
                $(element).attr('selected', true);
                $(element).addClass('selected');
            }

        </script>
    </body>
</html>
<?php
include_once './initialize.php';
$con = MysqlConnection::getConnection();
//BoletoModel::setBoleto('0002', "luis");
$rows = BoletoModel::getBoletos()['rows'];
?>
<!DOCTYPE html>
<html lang="es">
    <?php require_once './inc/head.php'; ?>
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
                //explore();
                initializeRandom();
            });

            function load() {
                for (var i = 0; i <= 100; i++) {
                    $('#loader').css("width", i + "%");
                }
            }
            
            function initializeRandom() {
                console.log(Math.floor((Math.random() * 2)));
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

            function addSelection(element) {
                $(element).attr('selected', true);
                $(element).addClass('selected');
            }

            function removeSelection(element) {
                $(element).attr('selected', false);
                $(element).removeClass('selected');
            }



        </script>
    </body>
</html>
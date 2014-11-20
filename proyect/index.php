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


        <script type="text/javascript">
            var contentName = "rawContainer";
            $(document).ready(function () {
                // Alto de la pantalla
                // $('#rawContainer').css('height', window.innerHeight + "px");

                for (var i = 0; i < 2; i++) {
                    var b = new Boleto(i);
                    b.draw(contentName);
                }
                load();
                explore();
            });


            function load() {
                for (var i = 0; i <= 100; i++) {
                    $('#loader').css("width", i + "%");
                }
            }

            function explore() {
                console.log($('.boleto').length);

                setTimeout(function () {    //  call a 3s setTimeout when the loop is called
                    alert('hello');          //  your code here
                    i++;                     //  increment the counter
                    if (i < 10) {            //  if the counter < 10, call the loop function
                        myLoop();             //  ..  again which will trigger another 
                    }                        //  ..  setTimeout()
                }, 3000);
                //console.log($('.boleto').get(0));
            }





        </script>
    </body>
</html>
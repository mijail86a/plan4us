<?php
$indice = $_REQUEST["indice"];
$paquete[1] = array(
    "fondo" => "MEDIDA-B2-png.png",
    "DADA COCKTAIL NIGHT",
    "De 4 a 6 personas",
    "Disfruta de este paquete junto a tu grupo de amigos, aquí te brindaremos un big box, equipado con lo que necesites, y la opción de elegir <b> 6 COCKTAILS</b> de Sopranos, ademas te ofreceremos <b> 2 PIQUEO</b> a tu elección y podrás disfrutas de la culinaria que ofrece el lugar. El paquete incluye <b> TRANPORTE IDA Y VUELTA</b> opcional para que puedas disfrutar de una de diversión segura.",
    "* Para el piqueo de Entraña Cab, recargo adicional de S/. 37.00",
    "servicios" => array("cocktel.png","piqueo.png","taxi.png","piqueo-extra.png"),
    "S/ 55.20 por persona",
    "S/ 320.00"
    );
$paquete[2] = array(
    "fondo" => "MEDIDA-B4-png.png",
    "BIG BOX NIGHT",
    "De 4 a 6 personas",
    "Disfruta de este paquete junto a tu grupo de amigos, aquí te brindaremos un big box, equipado con lo que necesites, y la opción de elegir <b> 6 COCKTAILS</b> de Sopranos, ademas te ofreceremos <b> 2 PIQUEO</b> a tu elección y podrás disfrutas de la culinaria que ofrece el lugar. El paquete incluye <b> TRANPORTE IDA Y VUELTA</b> opcional para que puedas disfrutar de una de diversión segura.",
    "* Para el piqueo de Entraña Cab, recargo adicional de S/. 37.00",
    "servicios" => array("cocktel.png","piqueo.png","taxi.png","piqueo-extra.png"),
    "S/ 55.20 por persona",
    "S/ 320.00"
    );
$paquete[3] = array(
    "fondo" => "MEDIDA-B5-png.png",
    "FREE BARRA DRAGÓN",
    "De 4 a 6 personas",
    "Disfruta de este paquete junto a tu grupo de amigos, aquí te brindaremos un big box, equipado con lo que necesites, y la opción de elegir <b> 6 COCKTAILS</b> de Sopranos, ademas te ofreceremos <b> 2 PIQUEO</b> a tu elección y podrás disfrutas de la culinaria que ofrece el lugar. El paquete incluye <b> TRANPORTE IDA Y VUELTA</b> opcional para que puedas disfrutar de una de diversión segura.",
    "* Para el piqueo de Entraña Cab, recargo adicional de S/. 37.00",
    "servicios" => array("cocktel.png","piqueo.png","taxi.png","piqueo-extra.png"),
    "S/ 55.20 por persona",
    "S/ 350.00"
    );
$paquete[4] = array(
    "fondo" => "MEDIDA-B3-png.png",
    "AURA BOTTLE NIGHT",
    "De 2 a 4 personas",
    "Disfruta de este paquete junto a tu grupo de amigos, aquí te brindaremos un big box, equipado con lo que necesites, y la opción de elegir <b> 6 COCKTAILS</b> de Sopranos, ademas te ofreceremos <b> 2 PIQUEO</b> a tu elección y podrás disfrutas de la culinaria que ofrece el lugar. El paquete incluye <b> TRANPORTE IDA Y VUELTA</b> opcional para que puedas disfrutar de una de diversión segura.",
    "* Para el piqueo de Entraña Cab, recargo adicional de S/. 37.00",
    "servicios" => array("botella.png","piqueo.png","taxi.png","piqueo-extra.png"),
    "S/ 55.20 por persona",
    "S/ 460.00"
    );
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/plan4us.css" >
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/popmotion.global.min.js"></script>
        <script src="js/plan4us.js"></script>
        <style>
            ._fondoPaquete{
                background-image: url(img/promo/<?php echo $paquete[$indice]["fondo"];?>);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body class="_fondoInterno">
        <div class="container-fluid h-100">
            <div id="inicio" class="row _fondoPaquete _h-40"><img class="_isotipo _paddingT-2 _paddingL-2" src="img/logo/plan4us_isotipo.png"></div>
            <div class="row _paddingT-2 _paddingL-2"><?php echo $paquete[$indice][0];?></div>
            <div class="row _paddingL-2">
                <img class="_corazon" src="img/iconos/corazon1.png">
                <img class="_corazon" src="img/iconos/corazon1.png">
                <img class="_corazon" src="img/iconos/corazon1.png">
                <img class="_corazon" src="img/iconos/corazon1.png">
                <img class="_corazon" src="img/iconos/corazon2.png">
            </div>
            <div class="row _paddingL-2"><?php echo $paquete[$indice][1];?></div>
            <div class="row _paddingL-2 _paddingR-2"><p class="text-justify"><?php echo $paquete[$indice][2];?></p></div>
            <div class="row _paddingL-2 _back-color1"><?php echo $paquete[$indice][3];?></div>
            <div class="row _paddingL-2 _paddingT-2 _paddingB-2 align-items-center"><img class="_ubicacion" src="img/iconos/ubicacion.png">&nbsp;Ver ubicación</div>
            <div class="row _paddingL-2 _paddingR-2 _paddingB-4">
                <div class="col-6 _paddingB-2"><b>Servicios incluidos</b></div>
                <div class="col-6 _paddingB-2"><b>Servicios opcionales</b></div>
                <div class="col-3 d-flex justify-content-center"><img src="img/iconos/<?php echo $paquete[$indice]["servicios"][0];?>"></div>
                <div class="col-3 d-flex justify-content-center"><img src="img/iconos/<?php echo $paquete[$indice]["servicios"][1];?>"></div>
                <div class="col-3 d-flex justify-content-center"><img src="img/iconos/<?php echo $paquete[$indice]["servicios"][2];?>"></div>
                <div class="col-3 d-flex justify-content-center"><img src="img/iconos/<?php echo $paquete[$indice]["servicios"][3];?>"></div>
                <div class="col-3 _textCenter _paddingT-2"><input type="checkbox"></div>
                <div class="col-3 _textCenter _paddingT-2"><input type="checkbox"></div>
                <div class="col-3 _textCenter _paddingT-2"><input type="checkbox"></div>
                <div class="col-3 _textCenter _paddingT-2"><input type="checkbox"></div>
            </div>
            <div class="row _padding-4"><span class="col-12 border border-white"></span></div>
            <div class="row _paddingL-2 align-items-center"><img class="_persona" src="img/iconos/persona.png">&nbsp;<?php echo $paquete[$indice][4];?></div>
            <div class="row _paddingL-2 _paddingT-2 _paddingB-2 _back-color1"><b>PRECIO TOTAL A PAGAR</b></div>
            <div class="row _paddingL-2 _paddingT-2"><span class="border _border-color1 _padding-2"><?php echo $paquete[$indice][5];?></span></div>
            <div class="row _paddingL-2 _paddingT-2 _paddingR-2"><button id="reservar" type="button" class="btn _back-bloque4 btn-block"><b>RESERVAR</b></button></div>
            <div class="row _h-20"></div>
        </div>
        <footer class="footer">
        <nav id="navbar-landing" class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse d-flex justify-content-center">
                <ul class="nav nav-pills nav-fill w-100">
                    <li class="nav-item my-auto"><a class="nav-link" href="plan_home.php"><img class="_menuImg" src="img/menu/home.png"></a></li>
                    <li class="nav-item my-auto"><a class="nav-link" href="plan_lista.php"><img class="_menuImg" src="img/menu/lista.png"></a></li>
                    <!--<li class="nav-item my-auto"><a class="nav-link" href=""><img class="_menuImg" src="img/menu/buscar.png"></a></li>-->
                    <li class="nav-item my-auto"><a class="nav-link" href="plan_favoritos.php"><img class="_menuImg" src="img/menu/favoritos.png"></a></li>
                    <li class="nav-item my-auto"><a class="nav-link" href=""><img class="_menuImg" src="img/menu/mas.png"></a></li>
                </ul>
            </div>
        </nav>
        </footer>
    </body>
</html>
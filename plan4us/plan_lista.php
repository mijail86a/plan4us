<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/plan4us.css" >
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/popmotion.global.min.js"></script>
        <script src="js/plan4us.js"></script>
    </head>
    <body class="_fondoInterno">
        <div class="container-fluid h-100">
            <div class="row _h-20"><img class="_isotipo _paddingT-2 _paddingL-2" src="img/logo/plan4us_isotipo.png"></div>
            <div class="row _paddingT-2 _paddingL-2"><?php echo $paquete[$indice][0];?></div>
            <div class="row _paddingL-2 _paddingR-2">
                <div class="col-12 _paddingB-4"><b>MIS RESERVAS</b></div>
                <div class="col-12 _paddingL-4 _paddingB-4">
                    <b>DADA COCKTAIL NIGHT</b><br/>
                    <small class="_back-color1">reservado</small>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center _paddingB-4"><img class="_reloj" src="img/iconos/reloj.png">&nbsp;00:00:00</div>
                <div class="col-6 d-flex justify-content-center align-items-center _paddingB-4"><button id="pagar_ahora" type="button" class="btn _back-bloque4 btn-block"><b>VER ESTADO</b></button></div>
                <!---->
                <div class="col-12 _paddingB-2"><b>HISTORIAL</b></div>
                <div class="col-7 border-bottom ">Fuga para dos</div>
                <div class="col-5 border-bottom text-right">01/11/2018</div>
                <!---->
                <div class="col-7 border-bottom ">Free barra dragón</div>
                <div class="col-5 border-bottom text-right">20/10/2018</div>
                <!---->
                <div class="col-7 border-bottom ">Aka tombo box vip</div>
                <div class="col-5 border-bottom text-right">07/09/2018</div>
                <!---->
                <div class="col-7 border-bottom ">Fuga para dos</div>
                <div class="col-5 border-bottom text-right">02/05/2018</div>
            </div>
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
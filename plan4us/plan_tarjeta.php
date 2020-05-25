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
                <div class="col-12 _paddingB-4"><b>AGREGAR TARJETA DE CRÉDITO O DÉBITO</b></div>
                <div class="col-12 _paddingB-2">Número de tarjeta</div>
                <div class="col-12 _paddingB-4"><input type="text" class="form-control" id="tarjeta"></div>
                <div class="col-12 _paddingB-2">Fecha de vencmiento</div>
                <div class="col-12 _paddingB-2">
                    <select id="inputState" class="form-control">
                        <option selected>Mes</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                    </select>
                </div>
                <div class="col-12 _paddingB-4">
                    <select id="inputState" class="form-control">
                        <option selected>Año</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                    </select>
                </div>
                <div class="col-12 _paddingB-2">CVC</div>
                <div class="col-12 _paddingB-4"><input type="text" class="form-control" id="cvc"></div>
                <div class="col-12 _paddingB-2">Nombre en la tarjeta</div>
                <div class="col-12 _paddingB-4"><input type="text" class="form-control" id="numero"></div>
                <div class="col-12 _paddingB-2">Apellido en la tarjeta</div>
                <div class="col-12 _paddingB-4"><input type="text" class="form-control" id="apellido"></div>
                <div class="col-12 _paddingB-2">Dirección</div>
                <div class="col-12 _paddingB-2"><input type="text" class="form-control" id="apellido"></div>
            </div>
            <div class="row _paddingL-2 _paddingT-2 _paddingR-2"><button id="pagar_ahora" type="button" class="btn _back-bloque4 btn-block"><b>PAGAR AHORA</b></button></div>
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
<?php
$indice = $_REQUEST["indice"];
$paquete[1] = array("DADA COCKTAIL NIGHT","S/ 320.00");
$paquete[2] = array("BIG BOX NIGHT","S/ 320.00");
$paquete[3] = array("FREE BARRA DRAGÓN","S/ 350.00");
$paquete[4] = array("AURA BOTTLE NIGHT","S/ 460.00");
?>
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
                <div class="col-5 _paddingB-2"><b>Participantes</b></div>
                <div class="col-4 _paddingB-2"><b>Monto a pagar</b></div>
                <div class="col-3 _paddingB-2"><b>Estado</b></div>
                <!---->
                <div class="col-5 _paddingB-2">Emil Rios</div>
                <div class="col-4 _paddingB-2">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" value="100.00">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">25%</a>
                                <a class="dropdown-item" href="">50%</a>
                                <a class="dropdown-item" href="">75%</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">100%</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 _paddingB-2"></div>
                <!---->
                <div class="col-5 _paddingB-2">Luciano Puma</div>
                <div class="col-4 _paddingB-2">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" value="200.00">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">25%</a>
                                <a class="dropdown-item" href="">50%</a>
                                <a class="dropdown-item" href="">75%</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">100%</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 _paddingB-2"></div>
                <!---->
                <div class="col-5 _paddingB-2">Juan Serruto</div>
                <div class="col-4 _paddingB-2">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" value="100.00">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">25%</a>
                                <a class="dropdown-item" href="">50%</a>
                                <a class="dropdown-item" href="">75%</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">100%</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 _paddingB-2"></div>
                <!---->
                <div class="col-5 _paddingB-2">Alejandra "Aleja" Murillo</div>
                <div class="col-4 _paddingB-2">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" value="0.00">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">25%</a>
                                <a class="dropdown-item" href="">50%</a>
                                <a class="dropdown-item" href="">75%</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">100%</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 _paddingB-2"></div>
            </div>
            <div class="row _padding-4"><span class="col-12 border border-white"></span></div>
            <div class="row _paddingL-2 _paddingR-2 _paddingB-4">
                <div class="col-4 d-flex justify-content-center"><img src="img/iconos/cobrar.png"></div>
                <div class="col-4 d-flex justify-content-center"><img src="img/iconos/pago.png"></div>
                <div class="col-4 d-flex justify-content-center"><img src="img/iconos/tarifa.png"></div>
                <div class="col-4 _paddingB-2"><b>Tarifa por cobrar</b></div>
                <div class="col-4 _paddingB-2"><b>Tarifa pagada</b></div>
                <div class="col-4 _paddingB-2"><b>Total a pagar </b></div>
                <div class="col-4 _textCenter _paddingT-2"><input type="text" readonly="readonly" class="form-control" id="monto" placeholder="" step="any" value="0.00"></div>
                <div class="col-4 _textCenter _paddingT-2"><input type="text" readonly="readonly" class="form-control" id="monto" placeholder="" step="any" value="100.00"></div>
                <div class="col-4 _textCenter _paddingT-2"><input type="text" readonly="readonly" class="form-control" id="monto" placeholder="" step="any" value="400.00"></div>
            </div>
            <div class="row _paddingL-2 _paddingT-2 _paddingR-2"><button id="pagar" type="button" class="btn _back-bloque4 btn-block"><b>PAGAR</b></button></div>
            <div class="row _paddingL-2 _paddingT-2 _paddingR-2"><button id="confirmar" type="button" class="btn _back-bloque4 btn-block"><b>CONFIRMA RESERVA</b></button></div>
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
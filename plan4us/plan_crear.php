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
    </head>
    <body class="_fondoInterno">
        <div class="container-fluid h-100">
            <div class="_w-90 h-100 _centerH _positionA _paddingT-10">
                <div class="form-group row _h-30">
                    <div class="col-sm-12 _logo _centerH _positionR h-100"></div>
                </div>
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="inputEmail4">Usuario</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Usuario">
                        </div>
                        <div class="col">
                            <label for="inputPassword4">Clave</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Clave">
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputFecha" class="col-sm-12 col-form-label">Fecha de nacimiento</label>
                        <div class="col d-flex justify-content-center">
                            <select>
                                <option>Dia</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <select>
                                <option>Mes</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <select>
                                <option>Año</option>
                                <option>1980</option>
                                <option>1981</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputPlan" class="col-sm-12 col-form-label"><b>¿Cuál es tu plan perfecto?</b></label>
                        <div class="col-3 d-flex justify-content-center"><img src="img/iconos/bar.png"></div>
                        <div class="col-3 d-flex justify-content-center"><img src="img/iconos/musica-en-vivo.png"></div>
                        <div class="col-3 d-flex justify-content-center"><img src="img/iconos/karaoke.png"></div>
                        <div class="col-3 d-flex justify-content-center"><img src="img/iconos/disco.png"></div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 d-flex justify-content-center align-items-center">BAR</div>
                        <div class="col-3 d-flex justify-content-center align-items-center">Música<br/>en vivo</div>
                        <div class="col-3 d-flex justify-content-center align-items-center">Karaoke</div>
                        <div class="col-3 d-flex justify-content-center align-items-center">Disco</div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 d-flex justify-content-center"><div class="form-check"><input class="form-check-input position-static" type="checkbox"></div></div>
                        <div class="col-3 d-flex justify-content-center"><div class="form-check"><input class="form-check-input position-static" type="checkbox"></div></div>
                        <div class="col-3 d-flex justify-content-center"><div class="form-check"><input class="form-check-input position-static" type="checkbox"></div></div>
                        <div class="col-3 d-flex justify-content-center"><div class="form-check"><input class="form-check-input position-static" type="checkbox"></div></div>
                    </div>
                    <div class="row">
                        <label class="col-sm-12 col-form-label"></label>
                        <div class="col"><button type="button" id="registro" class="btn _btn-play4us btn-block">Registrar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
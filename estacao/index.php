<!DOCTYPE html>
<html lang="pt-br">
<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/site.html">
        <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#00c277">
        <meta name="msapplication-TileColor" content="#00c277">
        <meta name="theme-color" content="#00c277">

        <title>
            Smart Campus ISP Catanduva
        </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/spinner.css">
        <link rel="stylesheet" href="css/grafico.css">
    </head>
    <body>
    
    <div class="overlay show" id="spinnerLoading">
        <!-- <p>Carregando...</p> -->
        <div class="spinner-border spinner-border-sm spinner1"></div>
    </div>
         
       
        
<!-- invisivel apenas no mobile xs -->
<div class="d-none d-sm-block navbar-padding-bottom">
    <ul class="jsMenu nav d-flex justify-content-between align-items-center fixed-top menu-topo-navegacao menu-bg">
        <div class="col-md-4 px-0">
            <img src="images/logotipo/svg/logotipo-unoesc-cinza.svg" alt="Logotipo Unoesc" class="logotipo opacity-4">
        </div>
        <div class="col-md-4 text-center px-0">
          <a class="nav-link text-dark font-weight-bold titulo animacao-texto" href="#">
            Smart Campus
          </a>
        </div>
        <div class="col-md-4 px-0">
            <div class="d-flex inline float-right">
                <a class="nav-link login opacity-4 mr-2" href="relatorio/index.html">
                    Gerar relat??rio
                </a>
                <a class="nav-link login opacity-4" href="http://smartcampus.ctd.ifsp.edu.br/estacao">
                    In??cio
                </a>
            </div>
        </div>
    </ul>
</div>


<!-- apenas visivel no mobile xs -->
<div class="d-block d-sm-none navbar-padding-bottom">
    <ul class="jsMenu nav justify-content-around align-items-center fixed-top menu-topo-navegacao menu-bg">
        <li class="nav-item">
            <a href="#">
                <img src="images/icones-menu/svg/icone-logotipo-cinza.svg" alt="In??cio" class="logotipo">
            </a>
        </li>

        <li class="nav-item">
            <a href="http://smartcampus.ctd.ifsp.edu.br/estacao">
                <i class="fas fa-home fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="relatorio/index.html">
                <i class="fas fa-chart-pie fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
        <li class="nav-item">
            <a target="_blank" href="#">
                <i class="fas fa-user fa-lg text-secondary opacity-5"></i>
            </a>
        </li>
        
    </ul>
</div>

    <div class="container">
        <div class="row">
    <div class="col-md-10 col-lg-8 col-12 mx-auto">
        <div class="text-center pb-5">
            <h1 class="text-secondary font-weight-bold">
                Monitoramento de temperatura, umidade e n??vel pluviom??trico
            </h1>
            <h5 class="text-secondary pt-3">
                Gr??ficos que disponibilizam dados coletados das esta????es meteorol??gicas instaladas no campus do IFSP Catanduva para aux??lio no monitoramento do clima
            </h5>
        </div>
    </div>
</div>        <div class="row mb-3 card-slide">

    
            <div class="container">
            <a class="link text-decoration-none estilo-card-selected" data-sensor-id="1" title="tab_sensor_1">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">Temperatura e Humidade </p>
                            <p class="m-0 card-sensor-subtitle">Esta????o Cetesb Catanduva</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            <div class="container">
            <a class="link text-decoration-none estilo-card-default" data-sensor-id="2" title="tab_sensor_2">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">MP10</p>
                            <p class="m-0 card-sensor-subtitle">Part??culas inalaveis Cetesb Catanduva</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            <div class="container">
            <a class="link text-decoration-none estilo-card-default" data-sensor-id="3" title="tab_sensor_3">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">NO, NO2, NOx</p>
                            <p class="m-0 card-sensor-subtitle">Mon??xido de Nitrog??nio</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            <div class="container">
            <a class="link text-decoration-none estilo-card-default" data-sensor-id="4" title="tab_sensor_4">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">Oz??nio </p>
                            <p class="m-0 card-sensor-subtitle">Oz??nio</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            <div class="container">
            <a class="link text-decoration-none estilo-card-default" data-sensor-id="5" title="tab_sensor_5">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">RADG</p>
                            <p class="m-0 card-sensor-subtitle">Radia????o Solar Global</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
            <div class="container">
            <a class="link text-decoration-none estilo-card-default" data-sensor-id="6" title="tab_sensor_6">
                <div class="card-sensor h-100">
                    <div class="d-flex align-items-center">
                        <!-- <div class="p-2">
                            <img class="card-sensor-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Vainglory_app_icon_%28rounded_edges%29.png/600px-Vainglory_app_icon_%28rounded_edges%29.png">
                        </div> -->
                        <div class="p-1">
                            <p class="m-0 card-sensor-tag">SENSOR</p>
                            <p class="m-0 card-sensor-title">Press. Atm.</p>
                            <p class="m-0 card-sensor-subtitle">Press??o Atmosf??rica</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    
</div>        <div class="box-graficos">

    
      
        <div id="tab_sensor_1" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                                Temperatura e Humidade (Cetesb Catanduva)                          </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="1">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                        <select class="formatoFiltro custom-select form-control">
                                              <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_1" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-1 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_1">
                        <canvas class="canvas" id="canvas_sensor_1" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_1">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                O n??vel pluviom??trico ?? a quantidade de chuva por metro quadrado                            </p>
                        </div>
                    </div>
                </div>
                    </div>
      
        <div id="tab_sensor_2" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                               MP10                           </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="2">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                        <select class="formatoFiltro custom-select form-control">
                                             <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_2" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-2 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_2">
                        <canvas class="canvas" id="canvas_sensor_2" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_2">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                Umidade do ar ideal para o ser humano ?? acima de 60%                            </p>
                        </div>
                    </div>
                </div>
                    </div>
      
        <div id="tab_sensor_3" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                            NO, NO2, NOx                            </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="3">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                        <select class="formatoFiltro custom-select form-control">
                                        <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_3" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-3 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_3">
                        <canvas class="canvas" id="canvas_sensor_3" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_3">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                Temperatura ideal para o ser humano gira em torno de 18 ??C e 24 ??C                            </p>
                        </div>
                    </div>
                </div>
                    </div>
      
        <div id="tab_sensor_4" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                            OZ??NIO                      </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="4">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                        <select class="formatoFiltro custom-select form-control">
                                            <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_4" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-4 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_4">
                        <canvas class="canvas" id="canvas_sensor_4" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_4">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                O n??vel pluviom??trico ?? a quantidade de chuva por metro quadrado                            </p>
                        </div>
                    </div>
                </div>
                    </div>
      
        <div id="tab_sensor_5" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                               RADG                          </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="5">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                        <select class="formatoFiltro custom-select form-control">
                                        <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_5" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-5 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_5">
                        <canvas class="canvas" id="canvas_sensor_5" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_5">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                Umidade do ar ideal para o ser humano ?? acima de 60%                            </p>
                        </div>
                    </div>
                </div>
                    </div>
      
        <div id="tab_sensor_6" class="box">
            <div class="row">
    <div class="col-md-11 mx-auto col-lg-12 col-12">
        <div class="">
            <div class="card mb-2">
                <div class="row no-gutters">
                    <div class="p-4 col-lg-12 col-12">
                        <h5 class="text-secondary mb-3">
                            <b>Filtrar dados</b>
                            <span class="box-filtrar-titulo-sensor">
                               Press??o Atmosf??rica                           </span>
                        </h5>
                        <form class="form" method="GET" action="#">
                            <div class="row">
                                <!-- id do sensor -->
                                <input type="hidden" class="sensor-id" value="6">
                                <!-- tipo de filtro -->
                                <div class="col-md-4 col-12 mb-2">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Formato</label>
                                         <select class="formatoFiltro custom-select form-control">
                                          <option value="dia" selected>Filtrar por dia</option>
                                             <option value="datas" >Filtrar entre datas</option>
                                          
                                        </select>
                                    </div>
                                </div>
                                <!-- por dia -->
                                <div class="col-md-3 col-12 por-dia">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataUnica">Selecionar data</label> 
                                        <input value="2021-10-11" type="date" class="form-control dataUnica">
                                    </div>
                                </div>
                                <div class="col-md-3 por-dia"></div>
                                <!-- entre datas -->
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataInicial">Data inicial</label> 
                                        <input value="2021-10-05" id="" type="date" class="form-control dataInicial">
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 entre-datas">
                                    <div class="">
                                        <label class="text-secondary m-0" for="dataFinal">Data final</label> 
                                        <input value="2021-10-11" id="" type="date" class="form-control dataFinal">
                                    </div>  
                                </div>
                             
                                <!-- btn filtrar -->
                                <div class="col-md-2 col-lg-2 col-12">
                                    <div class="">
                                        <label for=""></label>
                                        <input id="filtrar_6" type="button" class="btn form-control mt-1 m-md-0 btn-filtrar" value="Filtrar">
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            <div class="row">
                <div class="col-md-11 col-lg-12 mx-auto col-12">
                    <p class="m-0 font-weight-bold canvas-message-6 text-center mt-2 text-secondary"></p>
                    <div class="card p-4 toggle_canvas_6">
                        <canvas class="canvas" id="canvas_sensor_6" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
                            <div class="row toggle_canvas_6">
                    <div class="col-12 col-md-12">
                        <div class="card p-3 mt-1">
                            <p class="card-title m-0 text-center text-secondary">
                                Temperatura ideal para o ser humano gira em torno de 18 ??C e 24 ??C                            </p>
                        </div>
                    </div>
                </div>
                    </div>
    
</div>    </div>

    <div class="pb-5"></div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="js/loader.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/pt-br.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" integrity="sha256-gJWdmuCRBovJMD9D/TVdo4TIK8u5Sti11764sZT1DhI=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/jspdf-autotable%403.3.2/dist/jspdf.plugin.autotable.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <script src="js/baseUrl.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/tabs.js"></script>
        <script src="js/boxFiltro.js"></script>
        <script src="js/filtroGrafico.js"></script>
        <script src="js/gerarRelatorio.js"></script>
    </body>

<!-- Mirrored from cco-smartcampus.unoesc.edu.br/projeto/estacao-meteorologica/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 19:55:09 GMT -->
</html>
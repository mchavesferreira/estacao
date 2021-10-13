
   <div id="resultado"></div><BR>
  
   <div id="detalhes"></div>

   <div  id="demo"></div>

    <canvas id="waterchart"></canvas>
    <?php   
date_default_timezone_set('America/Sao_Paulo');
if(!$buscames) {  $buscames=date('m');  }
if(!$buscadia) {  $buscadia=date('d');  }
if(!$buscaano) {  $buscaano=date('Y');  }   

function nome_mes($num){
$mes = '';
switch ($num) {
case 0:
continue;
case 1:
$mes = "Janeiro";
break;
case 2:
$mes = "Fevereiro";
break;
case 3:
$mes = "Março";
break;
case 4:
$mes = "Abril";
break;
case 5:
$mes = "Maio";
break;
case 6:
$mes = "Junho";
break;
case 7:
$mes = "Julho";
break;
case 8:
$mes = "Agosto";
break;
case 9:
$mes = "Setembro";
break;
case 10:
$mes = "Outubro";
break;
case 11:
$mes = "Novembro";
break;
case 12:
$mes = "Dezembro";
break;
}
return $mes;
}


?>
    <button id="btn1"> <-24h</button>
    <button id="btn2"> <-Semana</button> 
    <button id="btn3"> <?php  echo nome_mes($buscames); ?> </button>  
    <button id="btn4"> <?php echo $buscaano;    ?></button>   <BR>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="js/app.js"></script>    <div style="height: 10px;"></div>

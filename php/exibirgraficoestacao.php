
  
    <canvas id="estacaochart"></canvas>
    <?php   
date_default_timezone_set('America/Sao_Paulo');
if(!$buscamessolar) {  $buscamessolar=date('m');  }
if(!$buscadiasolar) {  $buscadiasolar=date('d');  }
if(!$buscaanosolar) {  $buscaanosolar=date('Y');  }   

function nome_messolar($num){
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
    <button id="TEMP"> Umidade+Temp</button>
    <button id="MP10"> MP10</button>
    <button id="NO">NO,NO2,NOx</button> 
    <button id="O3">O3</button> 
    <button id="RADG">RADG</button>   
    <button id="PRESS">Press. Atm.</button> <BR>
    <button id="VV">Vento</button> <BR>
<BR><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="js/appestacao.js"></script> 



<div style="height: 10px;"></div>



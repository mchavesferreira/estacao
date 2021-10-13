   <!-- graficowhater -->
   <div class="container" id="graphico-container">
      
     <div class="col-12">

        <h2 class="title primary-color">Monitoramento Hídrico</h2>
        <p class="subtitle secondary-color">
           Consumo de água potável no campus IFSP Catanduva  2021
        </p>

   
        <?php
 
         include 'exibirgraficowater.php'; 

        ?>     
<p>

<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsebuscawater" role="button" aria-expanded="false" aria-controls="collapsebuscawater">
Escolha período
  </a>

</p>
<div class="collapse" id="collapsebuscawater">
  <div class="card card-body">
  
  <h2> Selecione uma data inicial e final para verificar o histórico de consumo. </h2>
  <form action="javascript:busca();" id="myForm"  method="POST">

  <div class="mb-3">
    Seleciona Hidrômetro:
    <select class="form-select"   name="fonte" aria-label="Default select example">
    <option selected value="entrada">Consumo Entrada</option>
    <option value="horta">Gasto Horta</option>
    </select>
    </div>
<div class="mb-3">
  Intervalo entre as leituras:
  <select class="form-select"  name="intervalo" aria-label="Default select example">
  <option selected value="dia">Dia</option>
  <option value="hora">Hora</option>
  <option value="10min">10min</option>
</select>
</div>

  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Data Inicial</label>
    <input type="date" class="form-control" name="datainicial">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data final</label>
    <input type="date" class="form-control" name="datafinal">
    <INPUT TYPE="hidden" NAME="buscawaterdia" VALUE="escolhadia"> 

<button type="submit" value="click" id="enviar">Busca período</button>
</form>
</div>
<?php 
switch ($_POST['buscawaterdia']) 
       {


        case 'escolhadia':
                 include 'php/graficowater.php';
                 echo "<BR>escolheu fonte dia : ";
                 echo $_POST['fonte'];
                 echo "<BR>escolheu datainicial :";
                 echo $_POST['datainicial'];
                 echo "<BR>escolheu datafinal :";
                 echo $_POST['datafinal'];
                 break;
      
      
       }
?>
<P></P>
<div id="resultado"></div><BR>
<div id="detalhes"></div>
<div  id="demo"></div>

<canvas id="waterchartbusca"></canvas>
<P></P>

</div>
</div>

<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsemediawater" role="button" aria-expanded="false" aria-controls="collapsemediawater">
    Médias
  </a>
</p>
<div class="collapse" id="collapsemediawater">
  <div class="card card-body">
   Tabela com médias de consumo e soma total
   <?php 
     include 'php/painel.php';
   ?>

  </div>
</div>

<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsesemanawater" role="button" aria-expanded="false" aria-controls="collapsesemanawater">
    <- Semana
  </a>
</p>
<div class="collapse" id="collapsesemanawater">
  <div class="card card-body">
   Consumo em última semana<BR>
   <P>
   <div id="semana1"></div>
   <div  id="semana2"></div>
   <canvas id="waterchartsemana"></canvas>     
   </div>
</div>
<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsemeswater" role="button" aria-expanded="false" aria-controls="collapsemeswater">
Mês: <?php  echo nome_mes($buscames); ?>
  </a>
</p>
<div class="collapse" id="collapsemeswater">
  <div class="card card-body">
   Consumo em mês atual<BR>
   <P>
   <div id="mes1"></div>
   <div  id="mes2"></div>
   <canvas id="waterchartmes"></canvas>     
   </div>
</div>

<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseanowater" role="button" aria-expanded="false" aria-controls="collapseanowater">
Ano: <?php echo $buscaano;    ?>
  </a>
</p>
<div class="collapse" id="collapseanowater">
  <div class="card card-body">
   Consumo em ano atual<BR>
   <P>
   <div id="ano1"></div>
   <div  id="ano2"></div>
   <canvas id="waterchartano"></canvas>     
   </div>
</div>


</div>
</div>
    
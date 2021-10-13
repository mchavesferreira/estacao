     <!-- graficowhater -->
     <div class="container" id="graphicosolar-container">
      
      <div class="col-12">
         <h2 class="title primary-color">Geração fotovoltaica</h2>
         <p class="subtitle secondary-color">
         Usina fotovoltaica do campus IFSP Catanduva
         </p>
 
 
         <?php


 include 'exibirgraficosolar.php'; 

 ?>     
<p>



<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsebuscaenergy" role="button" aria-expanded="false" aria-controls="collapsebuscaenergy">
Escolha período
  </a>

</p>
<div class="collapse" id="collapsebuscaenergy">
  <div class="card card-body">
  
  <h2> Selecione uma data inicial e final para verificar o histórico de geração. </h2>
  <form action="javascript:busca();" id="myForm"  method="POST">

 
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
    <INPUT TYPE="hidden" NAME="buscaenergydia" VALUE="escolhadia"> 

<button type="submit" value="click" id="enviar">Busca período</button>
</form>
</div>
<?php 
switch ($_POST['buscaenergydia']) 
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

<canvas id="energychartbusca"></canvas>
<P></P>

</div>
</div>

</div>
    </div>
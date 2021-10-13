   <!-- graficowhater -->
   <div class="container" id="graphico-container">
      
     <div class="col-12">

        <h2 class="title primary-color">Monitoramento Casa</h2>
        <p class="subtitle secondary-color">
           Geracao e consumo de energia
        </p>

        <div id="resultado"></div><BR>
        <?php
 
         include 'exibirgraficocasa.php'; 

        ?>     
<P>
        <p class="subtitle secondary-color">
           Ativa e Indutiva últimas 24 horas
        </p>
<canvas id="ativaindutivachart"></canvas>

<p>

<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapsebuscacasa" role="button" aria-expanded="false" aria-controls="collapsebuscacasa">
Escolha período
  </a>

</p>
<div class="collapse" id="collapsebuscacasa">
  <div class="card card-body">
  
  <h2> Selecione uma data inicial e final para verificar o histórico de consumo. </h2>
  <form action="javascript:busca();" id="myForm"  method="POST">

  <div class="mb-3">
    Seleciona Parâmetro:
    <select class="form-select"   name="fonte" aria-label="Default select example">
    <option selected value="ativatotal">Ativa total</option>
    <option value="ativaindutiva">Ativa Indutiva</option>
    <option value="geracaofv1">Geração FV1</option>
    <option value="geracaofv2">Geração FV2</option>
    </select>
    </div>
<div class="mb-3">
  Intervalo entre as leituras:
  <select class="form-select"  name="intervalo" aria-label="Default select example">
  <option value="2min">2 min</option>
  <option selected  value="hora">Hora</option>
  <option value="dia">Dia</option>
  
  
</select>
</div>

  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Data Inicial</label>
    <input type="date" class="form-control" name="datainicial">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data final</label>
    <input type="date" class="form-control" name="datafinal">
    <INPUT TYPE="hidden" NAME="buscacasadia" VALUE="escolhadia"> 

<button type="submit" value="click" id="enviar">Busca período</button>
</form>
</div>
<?php 
switch ($_POST['buscacasadia']) 
       {


        case 'escolhadia':
                 include 'php/graficocasa.php';
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
<div id="resultadobuscaenergy"></div><BR>
<div id="periodoenergy"></div>


<canvas id="casachartbusca"></canvas>
<P></P>

</div>
</div>


</div>
</div>
    
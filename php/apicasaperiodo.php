<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=casas;port=3306;charset=utf8', 'root', 'S&nh@123');

$datainicial=$_GET['datainicial'];
$datafinal=$_GET['datafinal'];
$intervalo=$_GET['intervalo'];
$fonte=$_GET['fonte'];


$buscadatainicio = "$datainicial 00:00:00";
$buscadatafinal = "$datafinal 23:59:00";

//include("connect.php");
//$link = Connection();
//$sql = "select dif_entrada as soma, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > $buscadatainicio  limit 200;"; // 

if ($fonte=='ativatotal')
{
     if ($intervalo == '2min') {
     $sql = "select  dif_ativatotal as dif_ativatotal, dif_ativaindutiva as dif_ativaindutiva, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'  limit 5000;";
     
    }

     if ($intervalo == 'hora') {
        $sql = "select  sum(dif_ativatotal) as dif_ativatotal, sum(dif_ativaindutiva) as dif_ativaindutiva, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'   group by cast(time as date), hour(time) limit 5000;";
      
 
    }

   if ($intervalo == 'dia') {
       $sql = "select   sum(dif_ativatotal) as dif_ativatotal, sum(dif_ativaindutiva) as dif_ativaindutiva, day(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'   group by cast(time as date), day(time) limit 5000;";
      }
} 
if ($fonte=='ativaindutiva')
{

  if ($intervalo == '2min') {
  $sql = "select dif_ativaindutiva as parametro1, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'  limit 5000;";
 }

  if ($intervalo == 'hora') {
   $sql = "select    sum(dif_ativaindutiva) as  parametro1, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'   group by cast(time as date), hour(time) limit 5000;";
  }

if ($intervalo == 'dia') {
    $sql = "select   sum(dif_ativaindutiva) as parametro1, day(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from energiaeletrica_chaves WHERE time > '$buscadatainicio' AND time < '$buscadatafinal'   group by cast(time as date), day(time) limit 5000;";
   }
}



$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);




?>
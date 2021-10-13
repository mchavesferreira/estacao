<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');


$periodo=$_GET['periodo'];
$buscames=$_GET['buscames'];
if(!$buscames) {  $buscames=date('m');  }

if ($periodo=='24h') {
    $sql = "select sum(dif_entrada) as soma, sum(dif_horta) as somahorta, cast(time as date) as dia,hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from hidrometro_ifsp WHERE time > date_sub(now(),interval 1 day) group by cast(time as date), hour(time);"; // 
}

if ($periodo=='semana') {
    $sql = "select sum(dif_entrada) as soma, sum(dif_horta) as somahorta, DATE_FORMAT(time, '%W') as hora from hidrometro_ifsp WHERE time > date_sub(now(),interval 7 day) group by cast(time as date), day(time);"; // 
}


if ($periodo=='mes') {
    $sql = "select sum(dif_entrada) as soma, sum(dif_horta) as somahorta,  DATE_FORMAT(time, '%e') as hora from hidrometro_ifsp  WHERE MONTH(time)= $buscames group by cast(time as date), day(time);"; // 
}
    
if ($periodo=='ano') {
    
    $sql = "select sum(dif_entrada) as soma, sum(dif_horta) as somahorta,  DATE_FORMAT(time, '%M') as hora from hidrometro_ifsp  WHERE YEAR(time)= YEAR(CURDATE()) group by  YEAR(time), MONTH(time);"; // 

}
        

  

$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);

/*
$result = mysqli_query($link, $sql);
$tr = mysqli_num_rows($result); // verifica o número total de registros
$total=0;
$totalhorta=0;
if (mysqli_num_rows($result)) {     
    $i=0;
      while ($row = $result->fetch_assoc()) {
         
          $hora = $row["hora"];
          $soma = $row["soma"]; 
          $somahorta = $row["somahorta"]; 
          $dia = $row["dia"]; 
          $horaatual = $row["horaatual"]; 
          $total=$total+$soma;
          $totalhorta=$totalhorta+$somahorta;

          echo "[ '" . $hora . "' , " . $soma. " , " . $somahorta. "],"; 
                $i++;
              }
      $result->free();
  }
  */

?>
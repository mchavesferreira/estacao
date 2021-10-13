<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');


$periodo=$_GET['periodo'];
$buscames=$_GET['buscames'];
if(!$buscames) {  $buscames=date('m');  } 

if ($periodo=='24h') {
$sql = "select potenciacatanduva as potencia, producaocatanduva as producao, hour(time) as hora, DATE_FORMAT(time, '%e/%M/%Y %H:%i:%s') as horaatual from Solar_IFSP WHERE time > current_date();"; // 
}

if ($periodo=='mes') {
$sql = "select max(producaocatanduva) as producao, DATE_FORMAT(time, '%e') as hora from  Solar_IFSP  WHERE MONTH(time)= $buscames group by cast(time as date), day(time);"; // 
}

if ($periodo=='ano') {

$sql = "select max(producaocatanduva) as producao,   DATE_FORMAT(time, '%M') as hora from  Solar_IFSP   WHERE YEAR(time)= YEAR(CURDATE()) group by  YEAR(time), MONTH(time);"; // 
}
    


$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);

?>
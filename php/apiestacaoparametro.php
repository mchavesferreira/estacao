<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');


//include("connect.php");
//$link = Connection();
// select potenciacatanduva as potencia  from Solar_IFSP WHERE time = date_sub(now();
$sql = "select UR as umidade, TEMP as temperatura, hour(time) as hora from cetesbcatanduvamedhor WHERE time > CURDATE() and UR  > 0;"; // 
$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);

?>
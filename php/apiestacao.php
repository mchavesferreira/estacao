<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');

$datainicial=$_GET['datainicial'];
$datafinal=$_GET['datafinal'];
$intervalo=$_GET['intervalo'];
$parametro=$_GET['parametro'];


$buscadatainicio = "$datainicial 00:00:00";
$buscadatafinal = "$datafinal 23:59:00";

if ($parametro=='MP10') {
$sql = "select MP10 as parametro1, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval  1 day)  and MP10  >= 0;"; // 
}

if ($parametro=='TEMP') {
    $sql = "select UR as parametro2, TEMP as parametro1, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and UR  > 0;"; // 
    }

if ($parametro=='NO') {


    $sql = "select NO as parametro1, NO2 as parametro2, NOX as parametro3, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and NO  >= 0;"; // 
    }

if ($parametro=='RADG') {


        $sql = "select RADG as parametro1, RADUV as parametro3, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and RADG  >= 0;"; // 
        }

 if ($parametro=='PRESS') {
            $sql = "select PRESS as parametro1, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and PRESS  >= 0;"; // 
            }
if ($parametro=='VV') {
                $sql = "select VV as parametro1, DV as parametro2, DVG as parametro3, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and VV  >= 0;"; // 
                }

if ($parametro=='O3') {
                    $sql = "select O3 as parametro1, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and O3  >= 0;"; // 
                    }

$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

    $result[] = $results;
}

echo json_encode($result);

?>
<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////
//filtroDatas.php?sensor_id=1&dataInicial=2020-10-05&dataFinal=2020-10-11 

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');
='+dataInicial+'&dataFinal

$datainicial=$_GET['dataInicial'];
$datafinal=$_GET['dataFinal'];
$intervalo=$_GET['intervalo'];
$sensor_id=$_GET['sensor_id'];

if($sensor_id=='1') { $parametro='TEMP'; }
if($sensor_id=='2') { $parametro='MP10'; }
if($sensor_id=='3') { $parametro='NO'; }
if($sensor_id=='4') { $parametro='RADG'; }
if($sensor_id=='5') { $parametro='PRESS'; }
if($sensor_id=='6') { $parametro='VV'; }
if($sensor_id=='7') { $parametro='O3'; }



$buscadatainicio = "$datainicial 00:00:00";
$buscadatafinal = "$datafinal 23:59:00";








if ($parametro=='TEMP') {
    //$sql = "select UR as parametro2, TEMP as parametro1, hour(time) as hora from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval 1 day)  and UR  > 0;"; // 
    $sql = "  select '1' as sensor_id,  TEMP as valor,  UR as valor2, hour(time) as hora_coleta,'#f4a545' as sensor_cor, date (time) as data_coleta, 'Sensor Temperatura' as sensor_nome, '(temperatura) C' as unidade_medida, 'Temperatura' as sensor_descricao from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval  1 day)  and TEMP  >= 0; ";
}

if ($parametro=='MP10') {
        $sql = "  select '2' as sensor_id,  MP10 as valor,  hour(time) as hora_coleta,'#f4a545' as sensor_cor, date (time) as data_coleta, 'Sensor MP10' as sensor_nome, '(Partículas Inaláveis) µg/m3' as unidade_medida, 'MP10' as sensor_descricao from cetesbcatanduvamedhor WHERE time > date_sub(now(),interval  1 day)  and MP10  >= 0; ";
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
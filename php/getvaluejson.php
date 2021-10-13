
<?php  ////////////////////////// dados das ultimas 24 horas ////////////////////////

$pdo = new PDO('mysql:host=localhost;dbname=sensor;port=3306;charset=utf8', 'root', 'S&nh@123');

$datainicial=$_GET['datainicial'];
$datafinal=$_GET['datafinal'];
$intervalo=$_GET['intervalo'];
$parametro=$_GET['parametro'];


$buscadatainicio = "$datainicial 00:00:00";
$buscadatafinal = "$datafinal 23:59:00";

if ($parametro=='MP10') {
$sql = "select MP10 as parametro1, DATE_FORMAT(time, '%H:%i') as hora, DATE_FORMAT(time, '%e/%M/%Y') as dia from cetesbcatanduvamedhor WHERE MP10  >= 0 order by time desc limit 1;"; // 
$detalhes = array('nomeparametro1' => 'MP10 (Particulas Inalaveis)', 'sigla1' => 'MP10', 'unidade1' => 'µg/m3', 'estacao' => 'Catanduva-SP');
}

if ($parametro=='TEMP') {
    $sql = "select TEMP as parametro1, UR as parametro2,  DATE_FORMAT(time, '%H:%i') as hora, DATE_FORMAT(time, '%e/%M/%Y') as dia from cetesbcatanduvamedhor WHERE UR  >= 0 order by time desc limit 1;"; // ;"; // 
    $detalhes = array('nomeparametro1' => 'Temperatura', 'sigla1' => 'TEMP', 'unidade1' => '°C', 'nomeparametro2' => 'Umidade Relativa', 'sigla2' => 'UR', 'unidade2' => '%', 'estacao' => 'Catanduva-SP');
}

if ($parametro=='NO') {


    $sql = "select NO as parametro1, NO2 as parametro2, NOX as parametro3, hour(time) as hora , date(time) as dia from cetesbcatanduvamedhor WHERE NO >= 0 order by time desc limit 1;"; // ;"; // 
    }

if ($parametro=='RADG') {
$sql = "select RADG as parametro1, RADUV as parametro3, hour(time) as hora , date(time) as dia  from cetesbcatanduvamedhor WHERE RADG  >= 0 order by time desc limit 1;"; // 
      }

 if ($parametro=='PRESS') {
            $sql = "select PRESS as parametro1, hour(time) as hora , date(time) as dia from cetesbcatanduvamedhor WHERE PRESS  >= 0 order by time desc limit 1;"; // 
            }
if ($parametro=='VV') {
                $sql = "select VV as parametro1, DV as parametro2, DVG as parametro3, hour(time) as hora , date(time) as dia from cetesbcatanduvamedhor WHERE VV  >= 0 order by time desc limit 1;"; // 
                }

if ($parametro=='O3') {
                    $sql = "select O3 as parametro1, hour(time) as hora , date(time) as dia from cetesbcatanduvamedhor WHERE O3  >= 0 order by time desc limit 1;"; // 
                    }

if ($parametro=='WaterSomamensal') {
    $buscames=$_GET['buscames'];
    if(!$buscames) {  $buscames=date('m');  } 
    $sql = "select sum(dif_entrada) as parametro1, sum(dif_horta) as parametro2 from hidrometro_ifsp  WHERE MONTH(time)=$buscames;"; // 
    }

if ($parametro=='SolarSomamensal') {
        $buscames=$_GET['buscames'];
        if(!$buscames) {  $buscames=date('m');  } 
        $sql = "select sum(dif_entrada) as parametro1, sum(dif_horta) as parametro2 from hidrometro_ifsp  WHERE MONTH(time)=$buscames;"; // 
        $sql = "select max(producaocatanduva) as producao, DATE_FORMAT(time, '%e') as hora from  Solar_IFSP  WHERE MONTH(time)= 09 group by cast(time as date), day(time);"; // 

}

    



$statement = $pdo->prepare($sql);
$statement->execute();


//while(
    
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    //) {

  //  $result[] = $results;
//}


echo json_encode($results);

?>

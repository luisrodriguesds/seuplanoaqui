
<?php 

	include '../../sistema/system.php';
	$link = DBconnec();
	$totalmonth = $_POST['totalmonth'];
	$totalKB = $_POST['totalKb']*30;
//	var_dump($_POST);
	$planos = DBread($link, 'planos', "WHERE internet != '-' ORDER BY internetKB ASC", 'internet, internetKB');

	//var_dump($planos);
	$getPlano = array();
	for ($i=0; $i < count($planos); $i++) { 
		if (intval($totalKB) <= intval($planos[$i]['internetKB'])) {
			$getPlano['internet'] = $planos[$i]['internet'];
			$getPlano['internetKB'] = $planos[$i]['internetKB'];
			$i = count($planos);
		}else if ($i == count($planos)-1) {
			$getPlano['internet'] = $planos[$i]['internet'];
			$getPlano['internetKB'] = $planos[$i]['internetKB'];
		}
	}

//	var_dump($getPlano);

	$selecPlanos = DBread($link, 'planos', "WHERE internetKB = '".$getPlano['internetKB']."'");

	echo json_encode($selecPlanos);

	DBclose($link);

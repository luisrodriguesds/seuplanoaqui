
<?php 

	include '../../sistema/system.php';
	$link = DBconnec();
	$totalmonth = $_POST['totalmonth'];
	$totalKB = $_POST['totalKb']*30;
//	var_dump($_POST);
	$planos = DBread($link, 'planos', "WHERE internet != '-' ORDER BY internet ASC", 'id, internet');

	//var_dump($planos);

	//conversor
	for ($i=0; $i < count($planos); $i++) { 
		$planos[$i]['internet'] = str_replace(',', '.', $planos[$i]['internet']);
		$planos[$i]['internet'] = str_replace(' ', '', $planos[$i]['internet']);
		if (strstr($planos[$i]['internet'], 'GB')) {
			$planos[$i]['internetKB'] = str_replace('GB', '', $planos[$i]['internet']);
			$planos[$i]['internetKB'] = intval($planos[$i]['internetKB'])*1024*1024;
		}else if (strstr($planos[$i]['internet'], 'MB')) {
			$planos[$i]['internetKB'] = str_replace('MB', '', $planos[$i]['internet']);
			$planos[$i]['internetKB'] = intval($planos[$i]['internetKB'])*1024;
		}else{
			$planos[$i]['internetKB'] = 0;
		}
	}

	usort($planos, function ($item1, $item2) {
	    return $item1['internetKB'] <=> $item2['internetKB'];
	});
	// var_dump($planos);

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

	// var_dump($getPlano);

	$selecPlanos = DBread($link, 'planos', "WHERE internet LIKE '%".$getPlano['internet']."%'");

	echo json_encode($selecPlanos);

	DBclose($link);
